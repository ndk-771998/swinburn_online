<?php

use App\Entities\ContactFormInputItem;
use Illuminate\Database\Seeder;
use VCComponent\Laravel\ConfigContact\Entites\ContactForm;
use VCComponent\Laravel\ConfigContact\Entites\ContactFormInput;
use VCComponent\Laravel\ConfigContact\Entites\ContactFormInputValidation;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $register_form = ContactForm::create([
            'name' => 'Đăng ký ngay hôm nay',
            'page' => 'apply',
            'position'  => 'position-1',
            'status' => 1,
            'submit_button_content' => 'Đăng ký ngay hôm nay',
            'success_notification_content' => 'Gửi thông tin đăng ký thành công',
        ]);

        $this->registerInputs($register_form);

        $contact_form = ContactForm::create([
            'name' => 'Liên hệ',
            'page' => 'contact-us',
            'position'  => 'position-1',
            'status' => 1,
            'submit_button_content' => 'Gửi đi',
            'success_notification_content' => 'Gửi thành công',
        ]);

        $this->contactInputs($contact_form);
    }

    public function contactInputs($form) {
        $input_name = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "text",
            'label' => 'Họ và tên *',
            'slug' => 'name',
            'order' => '0',
            'note' => '',
            'placeholder' => '',
            'column' => '12',
        ]);
        $this->createInputValidation($input_name, 'required', 'Nhập họ tên của bạn.');

        $input_name = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "text",
            'label' => 'Trường học',
            'slug' => 'school',
            'order' => '0',
            'note' => '',
            'placeholder' => '',
            'column' => '12',
        ]);

        $input_name = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "text",
            'label' => 'Bạn sống ở thành phố nào?',
            'slug' => 'city',
            'order' => '0',
            'note' => '',
            'placeholder' => '',
            'column' => '12',
        ]);

        $input_name = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "text",
            'label' => 'Số điện thoại *',
            'slug' => 'phone',
            'order' => '0',
            'note' => '',
            'placeholder' => '',
            'column' => '12',
        ]);
        $this->createInputValidation($input_name, 'required', 'Nhập số điện thoại của bạn.');

        $input_name = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "text",
            'label' => 'Email *',
            'slug' => 'email',
            'order' => '0',
            'note' => '',
            'placeholder' => '',
            'column' => '12',
        ]);
        $this->createInputValidation($input_name, 'required', 'Nhập email của bạn.');

        $input_name = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "select",
            'label' => 'Ngày *',
            'slug' => 'ngay',
            'order' => '0',
            'note' => '',
            'placeholder' => 'Ngày',
            'column' => '4',
        ]);
        $this->createInputValidation($input_name, 'required', 'Nhập ngày sinh của bạn.');

        ContactFormInputItem::create([
            'contact_form_input_id' => $input_name->id,
            'label' => 'Ngày',
        ]);
        for ($i=1; $i < 32; $i++) { 
            ContactFormInputItem::create([
                'contact_form_input_id' => $input_name->id,
                'label' => $i,
                'value' => $i
            ]);
        }

        $input_name = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "select",
            'label' => 'Tháng *',
            'slug' => 'thang',
            'order' => '0',
            'note' => '',
            'placeholder' => 'Tháng',
            'column' => '4',
        ]);
        ContactFormInputItem::create([
            'contact_form_input_id' => $input_name->id,
            'label' => "Tháng",
        ]);
        $this->createInputValidation($input_name, 'required', 'Nhập tháng sinh của bạn.');
        for ($i=1; $i < 13; $i++) { 
            ContactFormInputItem::create([
                'contact_form_input_id' => $input_name->id,
                'label' => $i,
                'value' => $i
            ]);
        }
        
        $input_name = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "select",
            'label' => 'Năm *',
            'slug' => 'nam',
            'order' => '0',
            'note' => '',
            'placeholder' => 'Năm',
            'column' => '4',
        ]);
        $this->createInputValidation($input_name, 'required', 'Nhập năm sinh của bạn.');

        ContactFormInputItem::create([
            'contact_form_input_id' => $input_name->id,
            'label' => 'Năm',
        ]);
    
        for ($i=1957; $i < 2022; $i++) { 
            ContactFormInputItem::create([
                'contact_form_input_id' => $input_name->id,
                'label' => $i,
                'value' => $i
            ]);
        }
    }

    public function registerInputs($form) {
        $input_name = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "text",
            'label' => 'Họ và tên:',
            'slug' => 'name',
            'order' => '0',
            'note' => '',
            'placeholder' => 'Họ và tên *',
            'column' => '12',
        ]);
        $this->createInputValidation($input_name, 'required', 'Nhập họ tên của bạn.');

        $input_email = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "text",
            'label' => 'Địa chỉ email:',
            'slug' => 'email',
            'order' => '1',
            'note' => '',
            'placeholder' => 'Địa chỉ email *',
            'column' => '12',
        ]);
        $this->createInputValidation($input_email, 'required', 'Nhập địa chỉ email sinh của bạn.');

        $input_phone = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "text",
            'label' => 'Số điện thoại:',
            'slug' => 'phone',
            'order' => '2',
            'note' => '',
            'placeholder' => 'Số điện thoại di động *',
            'column' => '12',
        ]);
        $this->createInputValidation($input_phone, 'required', 'Nhập số điện thoại của bạn.');

        $input_contactale_time = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "textarea",
            'label' => 'Khung thời gian liên hệ:',
            'slug' => 'contactable-time',
            'order' => '5',
            'note' => '',
            'placeholder' => 'Khung thời gian chúng tôi có thể gọi cho bạn *',
            'column' => '12',
        ]);
        $this->createInputValidation($input_contactale_time, 'required', 'Nhập khung thời gian để chúng tôi có thể dễ dàng liên hệ.');

        $input_address = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "text",
            'label' => 'Địa chỉ:',
            'slug' => 'address',
            'order' => '5',
            'note' => '',
            'placeholder' => 'Địa chỉ *',
            'column' => '12',
        ]);
        $this->createInputValidation($input_address, 'required', 'Nhập địa chỉ của bạn.');

        $input_note = ContactFormInput::create([
            'contact_form_id' => $form->id,
            'type_input' => "textarea",
            'label' => 'Lời nhắn:',
            'slug' => 'note',
            'order' => '6',
            'note' => '',
            'placeholder' => 'Những câu hỏi bạn cần được hỗ trợ *',
            'column' => '12',
        ]);
        $this->createInputValidation($input_note, 'required', 'Hãy để lại lời nhắn cho chúng tôi.');
    }

    protected function createInputValidation($input, $rule, $message) {
        return ContactFormInputValidation::create([
            'contact_form_input_id' => $input->id,
            'validation_name' => $rule,
            'validation_value' => $message,
        ]);
    }
}
