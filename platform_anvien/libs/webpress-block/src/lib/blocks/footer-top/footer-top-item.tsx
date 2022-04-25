import './editor.scss';
import { Block } from '../../block.model';
import { Input } from 'antd';
import {
  Media,
  MediaSelector,
} from '@vicoders/editor';
import {
  InspectorControls,
  useBlockProps,
} from '@wordpress/block-editor';
import {
  PanelBody,
  SelectControl,
  TextControl,
} from '@wordpress/components';
import { useState } from '@wordpress/element';

const { TextArea } = Input;
export const FooterTopItem: Block = {
  name: 'webpress/footer-top-item',
  settings: {
    apiVersion: 2,
    title: 'Footer Top Item',
    slug: 'footer-top-item',
    category: "widgets",
    attributes: {
      social_url: {
        type: 'string',
        default: ''
      },
      social_image: {
        type: 'string',
        default: 'assets/images/image.jpg'
      },
      social_name: {
        type: 'string',
        default: ''
      },
      alt: {
        type: 'string',
        default: ''
      },
    },
    edit: ({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) => {
      const onChangeAttribute = (attribute: string, value: string | number) => {
        setAttributes({ [attribute]: value });
      }
      const [isMediaModalActive, setIsMediaModalActive] = useState(false);
      const showMediaModal = () => {
        setIsMediaModalActive(!isMediaModalActive);
      }

      const onSelect = (media: Media | undefined) => {
        if (media) {
          setAttributes({ social_image: media.original_url, alt: media.alt_img });
        }
      }
      // eslint-disable-next-line react-hooks/rules-of-hooks
      const blockProps = useBlockProps();
      return (
        <div {...blockProps}>
           <InspectorControls>
            <PanelBody title="Settings">
              <TextControl
                label="Link"
                help="Link redirect to other page"
                value={attributes.social_url}
                onChange={(value: string) => onChangeAttribute('social_url', value)}
              />
            </PanelBody>
          </InspectorControls>
          <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{width:1, height:1}} />
          <div className="social__item">
          <img src={attributes.social_image} alt={attributes.alt} onClick={showMediaModal} /> 
          <Input placeholder="name" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('social_name', e.target.value)} value={attributes.social_name} />
          </div>
        </div>
      );
    },

    save: ({ attributes }: { attributes: any })  => {
      const blockProps = useBlockProps.save();
      return (
        <div className="col-3 col-md-3">
          <a href={attributes.social_url}><img src={attributes.social_image} alt={attributes.alt} /> {attributes.social_name}</a>
        </div>
      );
    },
  }
}
