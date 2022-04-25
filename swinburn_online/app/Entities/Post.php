<?php

namespace App\Entities;

use App\Events\PostDeletingByAdminEvent;
use Exception;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;
use VCComponent\Laravel\Category\Traits\HasCategoriesTrait;
use VCComponent\Laravel\Comment\Traits\HasCommentTrait;
use VCComponent\Laravel\Language\Traits\HasLanguageTrait;
use VCComponent\Laravel\MediaManager\Entities\MediaDimension;
use VCComponent\Laravel\MediaManager\HasMediaTrait;
use VCComponent\Laravel\Post\Entities\Post as BasePost;
use VCComponent\Laravel\Tag\Traits\HasTagsTraits;

class Post extends BasePost implements HasMedia
{
    use HasCommentTrait, HasCategoriesTrait, HasTagsTraits, HasMediaTrait, HasLanguageTrait;
    protected $dispatchesEvents = [
        'deleting' => PostDeletingByAdminEvent::class,
    ];

    public function postTypes()
    {
        return [
            'Sự kiện' => 'events',
            'Khóa học trực tuyến và bằng cập' => 'onlinecourses',
            'Học phần'  => 'units',
            'Tiêu chuẩn đầu vào' => 'standards',
            'Về chúng tôi' => 'aboutus',
            'Trang' => 'pages',
            'Các câu hỏi thường gặp' => 'faqs',
        ];
    }

    public function getLimitedName($limit = 10)
    {
        return Str::limit($this->name, $limit);
    }

    public function onlinecoursesSchema()
    {
        return [
            'seo_title' => [
                'type'  => 'text',
                'label' => 'Tiêu đề SEO',
                'rule'  => [],
            ],
            'seo_desc' => [
                'type'  => 'textarea',
                'label' => 'Mô tả SEO',
                'rule'  => [],
            ],
            'qualification' => [
                'type'  => 'text',
                'label' => 'Bằng cấp',
                'rule'  => [],
            ],
            'duration' => [
                'type'  => 'text',
                'label' => 'Thời gian',
                'rule'  => [],
            ],
            'units'     => [
                'type'  => 'text',
                'label' => 'Tín chỉ',
                'rule'  => [],
            ],
            'start_date' => [
                'type'  => 'text',
                'label' => 'Thời gian bắt đầu',
                'rule'  => [],
            ],
            'brochure'  => [
                'type'  => 'file',
                'label' => 'File brochure',
                'rule'  => [],
            ],
            'testimonial_image' => [
                'type'  => 'image',
                'label' => 'Tác giả lời chứng thực',
                'rule'  => [],
            ],
            'testimonial_content' => [
                'type'  => 'textarea',
                'label' => 'Nội dung lời chứng thực',
                'rule' => [],
            ],
            'testimonal_author' => [
                'type'  => 'text',
                'label' => '',
                'rule'  => [],
            ],
            'learning_outcome' => [
                'type' => 'textarea',
                'label' => 'Kết quả học tập khóa học',
                'rule' => [],
            ],
            'end_of_major'  => [
                'type'  => 'textarea',
                'label' => 'Kết thúc chuyên ngành',
                'rule'  => [],
            ],
            'course_rules'  => [
                'type'  => 'textarea',
                'label' => 'Quy tắc khóa học',
                'rule'  => [],
            ],
            'hidden_units_category_id' => [
                'type'  => 'text',
                'label' => 'Id danh mục học phần',
                'rule'  => [],
            ],
            'hidden_standards_category_id' => [
                'type'  => 'text',
                'label' => 'Id danh mục tiêu chuẩn',
                'rule'  => [],
            ],
        ];
    }

    public function unitsSchema() 
    {
        return [
            'unit_code' => [
                'type'  => 'text',
                'label' => 'Unit code',
                'rule'  => [],
            ],
            'duration'  => [
                'type'  => 'text',
                'label' => 'Thời gian',
                'rule'  => [],
            ],
            'contact_hours' => [
                'type'  => 'text',
                'label' => 'Số giờ liên lạc',
                'rule'  => [],
            ],
            'more_information_link' => [
                'type'  => 'text',
                'label' => 'Đường dẫn thông tin chi tiết',
                'rule'  => []
            ],
        ];
    }

    public function scopeGetBy($query, $type, $status)
    {
        return $query->where('type', $type)->where('status', $status)->orderBy('id', 'desc');
    }

    public function getMetaField($key)
    {
        if (!$this->postMetas->count()) {
            return '';
        }

        try {
            return $this->postMetas->where('key', $key)->first()->value;
        } catch (Exception $e) {
            return '';
        }
    }
    
    public function registerMediaConversions(Media $media = null)
    {
        $media_dimension = MediaDimension::where('model', 'post')->get();

        foreach ($media_dimension as $item) {
            $this->addMediaConversion($item->name)->width($item->width)->height($item->height)->sharpen(10);
        }
    }
    
    public function getDescriptionAttribute($value)
    {
        $trans = $this->getField('description');
        $language_translate = $this->translate($value, $trans);
        return $language_translate;
    }

    public function getTitleAttribute($value)
    {
        $trans = $this->getField('title');
        $language_translate = $this->translate($value, $trans);
        return $language_translate;
    }

    public function getContentAttribute($value)
    {
        $trans = $this->getField('content');
        $language_translate = $this->translate($value, $trans);
        return $language_translate;
    }

    // public function getField($field)
    // {
    //     if ($this->languages->count()) {
    //         $a = $this->languages->search(function ($item) use ($field) {
    //             return $item->pivot->field === $field;
    //         });
    //         if ($a !== false)
    //         return $this->languages[$a]->pivot->value;
    //     }
    //     return false;
    // }

    public function translate($value, $trans)
    {
        if ($trans) {
            return ucfirst($trans);
        } else {
            return ucfirst($value);
        }
    }
}
