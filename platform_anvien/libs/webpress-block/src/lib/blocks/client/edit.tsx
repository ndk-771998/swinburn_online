import './editor.scss';

import {
  Input,
  Select,
} from 'antd';

import {
  InnerBlocks,
  InspectorControls,
  useBlockProps,
} from '@wordpress/block-editor';

import {
  PanelBody,
  SelectControl,
  TextControl,
} from '@wordpress/components';
import { ClientBlockContext } from './client.context';
const ClientItemTeamplate = [
  ['webpress/client-item', {}],
];
const ALLOWED_BLOCKS = ['webpress/client-item'];

const { TextArea } = Input;
const { Option } = Select;

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {
  const onChangeAttribute = (attribute: string, value: string | number) => {
    setAttributes({ [attribute]: value });    
  }
  const style = attributes.style =='style-2' ? attributes.bg_color : '#fff';
 
  return (
    <ClientBlockContext.Provider value={attributes}>
    <div {...useBlockProps({className: attributes.style})} style={{'background': style} } >
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
      <div className="row">
        <div className="col-12 client__title">
          <Input placeholder="title" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('title', e.target.value)} value={attributes.title} />
        </div>
        {attributes.style =='style-2' &&
          <div className="col-12 client_description">
          <TextArea rows={4} placeholder="description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('description', e.target.value)} value={attributes.description} />

          </div>
        }
        <div className="client__box">
            <InnerBlocks
              template={ClientItemTeamplate}
              allowedBlocks={ALLOWED_BLOCKS}
            />

        </div>
      </div>
    </div>
    </ClientBlockContext.Provider>

  );
}
