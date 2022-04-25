import './editor.scss';
import { Block } from '../../block.model';
import { Input } from 'antd';
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
import {
  useContext,
  useEffect,
  useMemo,
  useState,
} from '@wordpress/element';
import { ClientBlockContext } from './client.context';
import { Media, MediaSelector } from '@vicoders/editor';
const { TextArea } = Input;
export const ClientItem: Block = {
  name: 'webpress/client-item',
  settings: {
    apiVersion: 2,
    title: 'Client Item',
    slug: 'client-item',
    category: "widgets",
    attributes: {
      clientImage: {
        type: 'string',
        default: 'assets/images/image.jpg'
      },
      alt: {
        type: 'string',
        default: ''
      },
      clientUrl: {
        type: 'string',
        default: ''
      },
    },
    edit: ({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) => {
      const [isMediaModalActive, setIsMediaModalActive] = useState(false);

      const clientAttributes = useContext(ClientBlockContext) || {};

      const parentStyle = useMemo(() => {
        return clientAttributes['style'];
      }, [clientAttributes['style']]);

      useEffect(() => {
        setAttributes({ parentStyle })
      }, [parentStyle])

      const showMediaModal = () => {
        setIsMediaModalActive(!isMediaModalActive);
      }

      const onSelect = (media: Media | undefined) => {
        if (media) {
          setAttributes({ clientImage: media.original_url, alt: media.alt_img });
        }
      }
      const onChangeAttribute = (attribute: string, value: string | number) => {
        setAttributes({ [attribute]: value });    
      }
      // eslint-disable-next-line react-hooks/rules-of-hooks
      const blockProps = useBlockProps();
      return (
        <div {...blockProps}>
           <InspectorControls>
            <PanelBody title="Settings">
              <TextControl
                label="Link"
                help=""
                value={attributes.clientUrl}
                onChange={(value: string) => onChangeAttribute('clientUrl', value)}
              />
            </PanelBody>
          </InspectorControls>
          <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{width:2, height:1}} />
            <div className="client__item">
              <img src={attributes.clientImage} alt={attributes.alt} onClick={showMediaModal} />
            </div>
        </div>
      );
    },

    save: ({ attributes }: { attributes: any })  => {
      const blockProps = useBlockProps.save();
      return (
        <div className="clients-item">
          <a href={attributes.clientUrl}><img  src={attributes.clientImage} alt="" /></a>
        </div>
      );
    },
  }
}
