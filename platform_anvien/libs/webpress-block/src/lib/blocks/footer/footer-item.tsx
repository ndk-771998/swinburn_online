import './editor.scss';
import { Block } from '../../block.model';
import { Input } from 'antd';
import {
  InspectorControls,
  useBlockProps,
    RichText,
    AlignmentToolbar,
    BlockControls,
} from '@wordpress/block-editor';
import { formatBold, formatItalic, link } from '@wordpress/icons';
import {
  Toolbar, ToolbarButton,
  PanelBody,
  SelectControl,
  TextControl,
} from '@wordpress/components';
import { useState } from '@wordpress/element';
const { TextArea } = Input;
export const FooterItem: Block = {
  name: 'webpress/footer-item',
  settings: {
    apiVersion: 2,
    title: 'Footer Item',
    slug: 'footer-item',
    category: "widgets",
    attributes: {
      item: {
        type: 'string',
        default: ''
      },
      style: {
        type: 'string',
        default: 'col-md-3'
      },
      
    },
    edit: ({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) => {
      const onChangeAttribute = (attribute: string, value: string | number) => {
        setAttributes({ [attribute]: value });
      }
      
      // eslint-disable-next-line react-hooks/rules-of-hooks
      const blockProps = useBlockProps({className: attributes.style});
      return (
        <div {...blockProps}>
          <InspectorControls>
            <PanelBody title="Settings">
              <SelectControl
                  label="Select Style"
                  value={attributes.style}
                  options={[
                    { value: 'col-md-3', label: 'Default' },
                    { value: 'col-md-6', label: 'Large' }
                  ]}
                  onChange={(value: string) => onChangeAttribute('style', value)}
              />
            </PanelBody>
          </InspectorControls>
                        
          <div className="footer__item">
            <TextArea rows={4} placeholder="Item" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('item', e.target.value)} value={attributes.item}/>
          </div>
        </div>
      );
    },

    save: ({ attributes }: { attributes: any })  => {
      const blockProps = useBlockProps.save();
      return (
        <div className={`col-12 ${attributes.style}`}>
          {attributes.item}
      </div>
      );
    },
  }
}
