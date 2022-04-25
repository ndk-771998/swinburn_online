import './editor.scss';

import {
  Input
} from 'antd';

import {
  InspectorControls,
  useBlockProps,
} from '@wordpress/block-editor';

import {
  PanelBody,
  SelectControl,
  TextControl,
} from '@wordpress/components';
const { TextArea } = Input;

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
  const onChangeAttribute = (attribute: string, value: string | number) => {
    setAttributes({ [attribute]: value });    
  }
  const style = attributes.style =='style-2' ? attributes.bg_color : '#fff';
  return (
    <div {...useBlockProps({className: attributes.style})} style={{'background': style}}>
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
                  { value: 'style-2', label: 'Style 2' },
                  { value: 'style-3', label: 'Style 3' }
                ]}
                onChange={(value: string) => onChangeAttribute('style', value)}
              />
            </PanelBody>
          </InspectorControls>
      <div className="row">
        {attributes.style =='style-1' &&
        (<div className='col-md-6'>
          
          <Input placeholder="Title" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('title', e.target.value)} value={attributes.title} />
          <TextArea rows={4} placeholder="Description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('description', e.target.value)} value={attributes.description} />
          
          </div>
          )}
          <div className={attributes.style =='style-1'? 'col-md-6' : 'col-12'}>
          <Input placeholder="heading" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('formHeading', e.target.value)} value={attributes.formHeading} />
          <h3>Contact Form</h3>
          {attributes.style =='style-1' ?
          (
          <TextArea rows={4} placeholder="Counter Description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('counterDescription', e.target.value)} value={attributes.counterDescription} />
          ) : (   
          <Input placeholder="counter heading" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('counterHeading', e.target.value)} value={attributes.counterheading} />
          )}
          <div className="contact__counter">
          <div className="contact__counter__input">
              <Input placeholder="Hour" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('counterHour', e.target.value)} value={attributes.counterHour} />
            </div>
            <div className="contact__counter__input">
              <Input placeholder="Day" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('counterDay', e.target.value)} value={attributes.counterDay} />
            </div>
            <div className="contact__counter__input">
              <Input placeholder="Month" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('counterMonth',e.target.value)} value={attributes.counterMonth} />
            </div>
            <div className="contact__counter__input">
              <Input placeholder="Year" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('counterYear',e.target.value)} value={attributes.counterYear} />
            </div>
          
          </div>
          
          {attributes.style !='style-1' &&
            (<TextArea rows={4} placeholder="Counter Description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('counterDescription', e.target.value)} value={attributes.counterDescription} />
            )}
        </div>
      </div>
    </div>

  );
}
