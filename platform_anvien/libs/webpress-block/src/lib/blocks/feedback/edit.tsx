import { Input, Select } from 'antd';
import './editor.scss';
import {
    AlignmentToolbar,
    BlockControls,
    InnerBlocks,
    InspectorControls,
    useBlockProps,
  } from '@wordpress/block-editor';
  import {
    PanelBody,
    SelectControl,
    TextControl,
  } from '@wordpress/components';
import { FeedBackBlockContext } from './feedback.context';
const { TextArea } = Input;
const { Option } = Select;
const FeedbackItemTeamplate = [
  ['webpress/feedback-item', {}],
];
const ALLOWED_BLOCKS = ['webpress/feedback-item'];

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
    const onChangeAttribute = (attribute: string, value: string | number) => {
        setAttributes({ [attribute]: value });
      }
      const style = attributes.style =='style-2' ? attributes.bg_color : '#fff';
    return (
        
        <div {...useBlockProps({className: attributes.style})}>
            <FeedBackBlockContext.Provider value={attributes}>
            <InspectorControls>
                <PanelBody title="Settings">
                { attributes.style == 'style-2' &&
                    <TextControl
                        label="Background Color"
                        help="Ex: #ffffff, #000000"
                        value={attributes.bg_color}
                        onChange={(value: string) => onChangeAttribute('bg_color', value)}
                    />
                }
                <SelectControl
                    label="Select Style"
                    value={attributes.style}
                    options={[
                    { value: 'style-1', label: 'Style 1' },
                    { value: 'style-2', label: 'Style 2' }
                    ]}
                    onChange={(value: string) => onChangeAttribute('style', value)}
                />
                </PanelBody>
            </InspectorControls>
            
            <div className="feedbacks" style={{'background':style}}>
                <div className="row">
                    <div className="col-12 feedback__title">
                        <Input placeholder="title" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('title', e.target.value)} value={attributes.title} />
                    </div>
                    <div className="col-12 feedback_description">
                        <TextArea rows={4} placeholder="description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('description', e.target.value)} value={attributes.description} />

                    </div>
                    <div className="feedback__box">
                        <InnerBlocks
                            template={FeedbackItemTeamplate}
                            allowedBlocks={ALLOWED_BLOCKS}
                        />
                    </div>
                </div>
            </div>
            </FeedBackBlockContext.Provider>
        </div>

    );
}