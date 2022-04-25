import './editor.scss';
import { Block } from '../../block.model';
import { Input } from 'antd';
import { Media, MediaSelector } from '@vicoders/editor';
import {
  InspectorControls,
  useBlockProps,
} from '@wordpress/block-editor';
import {
  PanelBody,
  SelectControl,
  TextControl
} from '@wordpress/components';
const { TextArea } = Input;
import { useState } from '@wordpress/element';
export const WebpressGalleryItem: Block = {
  name: 'webpress/webpress-gallery-item',
  settings: {
    apiVersion: 2,
    title: 'Webpress Gallery Item',
    slug: 'webpress-gallery-item',
    category: "widgets",
    attributes: {
      imageUrl: {
        type: 'string',
        default: 'assets/images/image.jpg'
      },
      url: {
        type: 'string',
        default: ''
      },
      alt: {
        type: 'string',
        default: ''
      },
      style:{
        type: 'string',
        default: 'col-md-4'
      }
    },
    edit: ({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) => {
     const [isMediaModalActive, setIsMediaModalActive] = useState(false);

      const showMediaModal = () => {
        setIsMediaModalActive(!isMediaModalActive);
      }
    
      const onSelect = (media: Media | undefined) => {
        if (media) {
          setAttributes({ imageUrl: media.original_url, alt: media.alt_img });
        }
      }

      const onChangeAttribute = (attribute: string, value: string | number) => {
        setAttributes({ [attribute]: value });
      }
      // eslint-disable-next-line react-hooks/rules-of-hooks
      const blockProps = useBlockProps({className: attributes.style});
      return (
        <div {...blockProps}>
          <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{width:2, height:1}} />
          <InspectorControls>
            <PanelBody title="Settings">
              <SelectControl
                label="Select Style"
                value={attributes.style}
                options={[
                  { value: 'col-md-4', label: 'Default' },
                  { value: 'col-md-8', label: 'Larger' }
                ]}
                onChange={(value: string) => onChangeAttribute('style', value)}
              />
              <TextControl
                label="Link"
                help="Link redirect to other page"
                value={attributes.url}
                onChange={(value: string) => onChangeAttribute('url', value)}
              />
            </PanelBody>
          </InspectorControls>
          <div className="gallery__item">
                  <img src={attributes.imageUrl} alt={attributes.alt} onClick={showMediaModal}/>
          </div>
        </div>
      );
    },

    save: ({ attributes }: { attributes: any })  => {
      return (
          <div className={`${attributes.style} photo-item`}>
              <a href={attributes.url}><img  src={attributes.imageUrl} alt={attributes.alt} /></a>
          </div>       
      );
    },
  }
}
