/* eslint-disable react-hooks/rules-of-hooks */
import './editor.scss';

import { Input } from 'antd';

import { Media, MediaSelector } from '@vicoders/editor';
import {
  InspectorControls,
  useBlockProps,
  AlignmentToolbar,
  BlockControls,
  InnerBlocks,
  ColorPalette,
} from '@wordpress/block-editor';
import {
  PanelBody,
  SelectControl,
  TextControl,
  ToolbarGroup,
  ToolbarDropdownMenu,
  ColorPicker,
  FontSizePicker,
  Card,
  CardMedia,
} from '@wordpress/components';
import { useContext, useEffect, useMemo, useState } from '@wordpress/element';

import { Block } from '../../block.model';
import { TeamBlockContext } from './team.context';
import { more, edit } from '@wordpress/icons';
const { TextArea } = Input;

export const TheTeamItem: Block = {
  name: 'webpress/the-team-item',
  settings: {
    apiVersion: 2,
    title: 'The Team Item',
    slug: 'the-team-item',
    category: 'widgets',
    attributes: {
      title: {
        type: 'string',
        default: '',
      },
      position: {
        type: 'string',
        default: '',
      },
      description: {
        type: 'string',
        default: '',
      },
      alignment: {
        type: 'string',
        default: 'none',
      },
      titleColor: {
        type: 'string',
        default: '',
      },
      positionColor: {
        type: 'string',
        default: '',
      },
      descriptionColor: {
        type: 'string',
        default: '',
      },
      fontFamily: {
        type: 'string',
        default: '',
      },
      titleFontSize: {
        type: 'string',
        default: '',
      },
      positionFontSize: {
        type: 'string',
        default: '',
      },
      descriptionFontSize: {
        type: 'string',
        default: '',
      },
      url: {
        type: 'string',
        default: '',
      },
      imageUrl: {
        type: 'string',
        default: 'assets/images/image.jpg',
      },
      alt: {
        type: 'string',
        default: '',
      },
      style: {
        type: 'string',
        default: 'default',
      },
      parentStyle: {
        type: 'string',
        default: 'default',
      },
    },
    edit: ({
      attributes,
      isSelected,
      setAttributes,
    }: {
      attributes: any;
      isSelected: boolean;
      setAttributes: any;
    }) => {
      const [isMediaModalActive, setIsMediaModalActive] = useState(false);

      const teamAttributes = useContext(TeamBlockContext) || {};

      const parentStyle = useMemo(() => {
        return teamAttributes['style'];
      }, [teamAttributes['style']]);

      useEffect(() => {
        setAttributes({ parentStyle });
      }, [parentStyle]);

      const showMediaModal = () => {
        setIsMediaModalActive(!isMediaModalActive);
      };

      const onSelect = (media: Media | undefined) => {
        if (media) {
          setAttributes({ imageUrl: media.original_url, alt: media.alt_img });
        }
      };
      // eslint-disable-next-line react-hooks/rules-of-hooks

      const onChangeAttribute = (attribute: string, value: string | number) => {
        setAttributes({ [attribute]: value });
      };
      const blockProps = useBlockProps();

      return (
        <div {...blockProps}>
          <BlockControls>
            <AlignmentToolbar
              value={attributes.alignment}
              onChange={(value: string) =>
                onChangeAttribute('alignment', value)
              }
            />
            <ToolbarGroup>
              <ToolbarDropdownMenu
                icon={more}
                label="Select a font family"
                controls={[
                  {
                    title: 'Roboto',
                    onClick: () => onChangeAttribute('fontFamily', 'Roboto'),
                  },
                  {
                    title: 'Montserrat',
                    onClick: () =>
                      onChangeAttribute('fontFamily', 'Montserrat'),
                  },
                  {
                    title: 'Roboto Slab',
                    onClick: () =>
                      onChangeAttribute('fontFamily', 'Roboto Slab'),
                  },
                  {
                    title: 'Lobster',
                    onClick: () => onChangeAttribute('fontFamily', 'Lobster'),
                  },
                  {
                    title: 'Tinos',
                    onClick: () => onChangeAttribute('fontFamily', 'Tinos'),
                  },
                ]}
              />

              {/* <IconButton
                label="My very own custom button"
                icon={edit}
                className="my-custom-button"
                onClick={() => console.log('pressed button')}
              /> */}
            </ToolbarGroup>
          </BlockControls>
          <InspectorControls>
            <PanelBody title="Content Settings">
              <p>Title Color</p>
              <ColorPalette
                value={attributes.titleColor}
                onChange={(value: string) =>
                  onChangeAttribute('titleColor', value)
                }
              />
              <p>Title Font size(px)</p>
              <FontSizePicker
                value={attributes.titleFontSize}
                onChange={(value: any) =>
                  onChangeAttribute('titleFontSize', value)
                }
              />
              <p>Position Color</p>
              <ColorPalette
                value={attributes.positionColor}
                onChange={(value: string) =>
                  onChangeAttribute('positionColor', value)
                }
              />
              <p>Position Font size(px)</p>
              <FontSizePicker
                value={attributes.positionFontSize}
                onChange={(value: any) =>
                  onChangeAttribute('positionFontSize', value)
                }
              />
              {attributes.parentStyle == 'style-2' && (
                <div className="description">
                  <p>Description Color</p>
                  <ColorPalette
                    value={attributes.descriptionColor}
                    onChange={(value: string) =>
                      onChangeAttribute('descriptionColor', value)
                    }
                  />
                  <p>Description Font size(px)</p>
                  <FontSizePicker
                    value={attributes.descriptionFontSize}
                    onChange={(value: any) =>
                      onChangeAttribute('descriptionFontSize', value)
                    }
                  />
                </div>
              )}
            </PanelBody>
            <PanelBody title="General Settings">
              {attributes.parentStyle == 'style-2' && (
                <SelectControl
                  label="Select Style"
                  value={attributes.style}
                  options={[
                    { value: 'default', label: 'Default' },
                    { value: 'content__swap', label: 'Swap' },
                  ]}
                  onChange={(value: string) =>
                    onChangeAttribute('style', value)
                  }
                />
              )}
              <TextControl
                label="Link Redirect"
                help="Link redirect to other page"
                value={attributes.url}
                onChange={(value: string) => onChangeAttribute('url', value)}
              />
            </PanelBody>
          </InspectorControls>
          <MediaSelector
            isModalVisible={isMediaModalActive}
            onSelect={onSelect}
            aspect={{ width: 1, height: 1 }}
          />
          <div className={`team__item ${attributes.style}`}>
            <div className="team__item__image">
              <img
                src={attributes.imageUrl}
                alt={attributes.alt}
                onClick={showMediaModal}
              />
            </div>
            <div className="team__item__content">
              <Input
                placeholder="title"
                style={{
                  textAlign: attributes.alignment,
                  fontFamily: attributes.fontFamily,
                  fontSize: attributes.titleFontSize,
                  color: attributes.titleColor,
                }}
                onChange={(e: React.ChangeEvent<HTMLInputElement>) =>
                  onChangeAttribute('title', e.target.value)
                }
                value={attributes.title}
              />
              <Input
                placeholder="position"
                style={{
                  textAlign: attributes.alignment,
                  fontFamily: attributes.fontFamily,
                  fontSize: attributes.positionFontSize,
                  color: attributes.positionColor,
                }}
                onChange={(e: React.ChangeEvent<HTMLInputElement>) =>
                  onChangeAttribute('position', e.target.value)
                }
                value={attributes.position}
              />
              {attributes.parentStyle == 'style-2' && (
                <TextArea
                  style={{
                    textAlign: attributes.alignment,
                    fontFamily: attributes.fontFamily,
                    fontSize: attributes.descriptionFontSize,
                    color: attributes.descriptionColor,
                  }}
                  rows={4}
                  placeholder="description"
                  onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) =>
                    onChangeAttribute('description', e.target.value)
                  }
                  value={attributes.description}
                />
              )}
            </div>
          </div>
        </div>
      );
    },

    save: ({ attributes }: { attributes: any }) => {
      return (
        <div
          className={`${
            attributes.parentStyle == 'style-1' ? 'col-md-4' : 'col-md-6'
          } ${attributes.parentStyle}`}
        >
          <div
            className={`team__content-member ${attributes.style} ${
              attributes.parentStyle == 'style-2' ? 'row' : ''
            }`}
          >
            <div
              className={`team__member-image ${
                attributes.parentStyle == 'style-2' ? 'col-md-4' : ''
              } `}
            >
              <a href={attributes.url}>
                <img src={attributes.imageUrl} alt={attributes.alt} />
              </a>
            </div>
            <div
              className={`team__member-info ${
                attributes.parentStyle == 'style-2' ? 'col-md-8' : ''
              } `}
            >
              <div className="team__info-name">
                <h5
                  style={{
                    textAlign: attributes.alignment,
                    fontFamily: attributes.fontFamily,
                    fontSize: attributes.titleFontSize,
                    color: attributes.titleColor,
                  }}
                >
                  {attributes.title}
                </h5>
                <p
                  style={{
                    textAlign: attributes.alignment,
                    fontFamily: attributes.fontFamily,
                    fontSize: attributes.positionFontSize,
                    color: attributes.positionColor,
                  }}
                >
                  {attributes.position}
                </p>
              </div>
              {attributes.parentStyle == 'style-2' && (
                <div className="team__info-quote">
                  <p
                    style={{
                      textAlign: attributes.alignment,
                      fontFamily: attributes.fontFamily,
                      fontSize: attributes.descriptionFontSize,
                      color: attributes.descriptionColor,
                    }}
                  >
                    {attributes.description}
                  </p>
                </div>
              )}
            </div>
          </div>
        </div>
      );
    },
  },
};
