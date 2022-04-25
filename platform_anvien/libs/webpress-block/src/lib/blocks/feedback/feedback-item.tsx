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
  TextControl
} from '@wordpress/components';
import { useContext, useEffect, useMemo, useState } from '@wordpress/element';
import { FeedBackBlockContext } from './feedback.context';
const { TextArea } = Input;
export const FeedbackItem: Block = {
  name: 'webpress/feedback-item',
  settings: {
    apiVersion: 2,
    title: 'Feedback Item',
    slug: 'feedback-item',
    category: "widgets",
    attributes: {
      title: {
        type: 'string',
        default: ''
      },
      position: {
        type: 'string',
        default: ''
      },
      description: {
        type: 'string',
        default: ''
      },
      imageUrl: {
        type: 'string',
        default: 'assets/images/image.jpg'
      },
      url: {
        type: 'string',
        default: '',
      },
      alt: {
        type: 'string',
        default: ''
      },
      style: {
        type: 'string',
        default: 'default'
      },
      parentStyle: {
        type: 'string',
        default: 'default'
      },
    },
    edit: ({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) => {
      const [isMediaModalActive, setIsMediaModalActive] = useState(false);
      const feedbackAttributes = useContext(FeedBackBlockContext) || {};
      const parentStyle = useMemo(() => {
        return feedbackAttributes['style'];
      }, [feedbackAttributes['style']]);

      useEffect(() => {
        setAttributes({ parentStyle })
      }, [parentStyle])
      const showMediaModal = () => {
        setIsMediaModalActive(!isMediaModalActive);
      }

      const onSelect = (media: Media | undefined) => {
        if (media) {
          setAttributes({ imageUrl: media.original_url, alt: media.alt_img });
        }
      }
      // eslint-disable-next-line react-hooks/rules-of-hooks

      const onChangeAttribute = (attribute: string, value: string | number) => {
        setAttributes({ [attribute]: value });
      }
      const blockProps = useBlockProps({className: attributes.style});
      return (
          <div {...blockProps}>
            <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{width:1, height:1}} />
            
            <InspectorControls>
              <PanelBody title="Settings">
              {attributes.parentStyle == 'style-1' &&
                <SelectControl
                  label="Select Style"
                  value={attributes.style}
                  options={[
                    { value: 'default', label: 'Default' },
                    { value: 'rtl', label: 'RTL' }
                  ]}
                  onChange={(value: string) => onChangeAttribute('style', value)}
                />
              }
                <TextControl
                label="Link"
                help="Link redirect to other page"
                value={attributes.url}
                onChange={(value: string) => onChangeAttribute('url', value)}
              />
              </PanelBody>
            </InspectorControls>
            {attributes.parentStyle == 'style-1' ? 
            (
            <div className="feedback__box__item">         
              <div className={`feedback__box__item__content ${attributes.style}`}>
                <div className="feedback__box__item__content__image">
                <img src={attributes.imageUrl} alt={attributes.alt} onClick={showMediaModal}/>
                </div>
                <div className="feedback__box__item__content__wrap">
                  <Input placeholder="box title" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('title', e.target.value)} value={attributes.title} />
                  <Input placeholder="box position" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('position', e.target.value)} value={attributes.position} />    
                  <TextArea rows={4} placeholder="description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('description', e.target.value)} value={attributes.description} />           
                </div>
              </div>
            </div>
            )
          : 
            (
              <div className="feedback__box__item">
                <TextArea rows={4} placeholder="box description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('description', e.target.value)} value={attributes.description} />
                <div className="feedback__box__item__content">
                  <div className="feedback__box__item__content__image">
                    <img src={attributes.imageUrl} alt={attributes.alt} onClick={showMediaModal}/> 
                  </div>
                  <div className="feedback__box__item__content__wrap">
                    <Input placeholder="box title" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('title', e.target.value)} value={attributes.title} />
                    <Input placeholder="box position" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('position', e.target.value)} value={attributes.position} />               
                  </div>
                </div>
              </div>
            )
          }
        </div>
      );
    },

    save: ({ attributes }: { attributes: any })  => {
      return (        
          <div className={`${attributes.parentStyle=='style-1' ? 'feedback__style-1' : 'feedback__style-2'}__item ${attributes.style == 'rtl' ? 'feedback-swap' : 'default'} ${attributes.parentStyle =='style-1' ? 'col-12' : 'col-md-4'}`}>
            {
              attributes.parentStyle =='style-1' ?
              (
                <div className="row">
                  <div className={`col-md-2 feedback__style-1__item__image`}> 
                    <a href={attributes.url}><img  src={attributes.imageUrl} alt={attributes.alt} /></a>
                  </div>
                  <div className={`col-md-10 feedback__style-1__item__text`}>
                    <div className="feedback__style-1__item__description">
                      <p>{attributes.description}</p>
                    </div>
                    <div className="feedback__style-1__item__author">
                      <h5>{attributes.title}</h5>
                      <p>{attributes.position}</p>
                    </div>
                  </div>
                </div>
              ) : (
                <div className="feedback__style-2__item__wrap">
                  <div className="feedback__style-2__item__description">
                    <p>{attributes.description}</p>
                  </div>
                  <div className="feedback__style-2__item__image">
                    <a href={attributes.url}><img  src={attributes.imageUrl} alt={attributes.alt} /></a>
                    <div className="feedback__style-2__item__author">
                      <h5>{attributes.title}</h5>
                      <p>{attributes.position}</p>
                    </div>
                  </div>
                </div>
              )
            }
          </div>
      );
    },
  }
}
