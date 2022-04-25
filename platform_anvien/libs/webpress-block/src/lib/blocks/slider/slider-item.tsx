import './editor.scss';
import {
    useBlockProps,
    BlockControls,
    AlignmentToolbar,
    InspectorControls,
    ColorPalette
} from '@wordpress/block-editor';
import { Block } from '../../block.model';
import { Input } from 'antd';
import { Media, MediaSelector } from '@vicoders/editor';
import { useState } from '@wordpress/element';
import {
    ToolbarGroup,
    PanelBody,
    ToolbarDropdownMenu,
    __experimentalInputControl as InputControl,
    FontSizePicker,
} from '@wordpress/components';

import {
    more,
    edit
} from '@wordpress/icons';

const { TextArea } = Input;


export const SliderItem: Block = {
    name: 'webpress/slider-item',
    settings: {
        apiVersion: 2,
        title: 'Slider Item',
        slug: 'slider-item',
        category: "widgets",
        attributes: {
            boxTitle: {
                type: 'string',
                default: 'Choose one great offer for your customers'
            },
            boxDescription: {
                type: 'string',
                default: 'Type your description for slider'
            },
            ctaUrl: {
                type: 'string',
                default: '#'
            },
            ctaText: {
                type: 'string',
                default: 'Call to action'
            },
            image_slide: {
                type: 'string',
                default: 'assets/images/image.jpg'
            },
            alt_slide: {
                type: 'string',
                default: ''
            },
            alignment: {
                type: 'string',
                default: ''
            },
            fontFamily: {
                type: 'string',
                default: ''
            },
            textColor: {
                type: 'string',
                default: ''
            },
            fontSize: {
                type: 'string',
                default: ''
            },
            descFontSize: {
                type: 'string',
                default: ''
            },
            descColor: {
                type: 'string',
                default: ''
            }
        },
        edit: ({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) => {
            const { image_slide, alt_slide } = attributes;
            const [isMediaModalActive, setIsMediaModalActive] = useState(false);

            const showMediaModal = () => {
                setIsMediaModalActive(!isMediaModalActive);
            }

            const onSelect = (media: Media | undefined) => {
                if (media) {
                    setAttributes({ image_slide: media.original_url, alt_slide: media.alt_img });
                }
            }

            const blockProps = useBlockProps();

            const onChangeAttribute = (attribute: string, value: string | number) => {
                setAttributes({ [attribute]: value });
            }

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
                            {/* <InputControl
                                label="Font size(px)"
                                labelPosition="edge"
                                value={attributes.fontSize}
                                onChange={(value: any) => onChangeAttribute('fontSize', value)}
                            /> */}
                            {/* <IconButton
                                label="My very own custom button"
                                icon={edit}
                                className="my-custom-button"
                                onClick={() => console.log('pressed button')}
                            /> */}
                        </ToolbarGroup>
                    </BlockControls>
                    <InspectorControls>
                        <PanelBody title="Settings">
                            <p>Title Color</p>
                            <ColorPalette
                                value={attributes.textColor}
                                onChange={(value: string) =>
                                    onChangeAttribute('textColor', value)
                                }
                            />
                            <p>Title Font Size</p>
                            <FontSizePicker
                                value={attributes.fontSize}
                                onChange={(value: any) =>
                                    onChangeAttribute('fontSize', value)
                                }
                            />

                            <p>Description Text Color</p>
                            <ColorPalette
                                value={attributes.descColor}
                                onChange={(value: string) =>
                                    onChangeAttribute('descColor', value)
                                }
                            />
                            <p>Description Font Size</p>
                            <FontSizePicker
                                value={attributes.descFontSize}
                                onChange={(value: any) =>
                                    onChangeAttribute('descFontSize', value)
                                }
                            />
                        </PanelBody>
                    </InspectorControls>
                    <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{ width: 2, height: 1 }} />
                    <div className="slide__box__item row">
                        <div className="col-4 slide__box__item__image">
                            <img src={image_slide} alt={alt_slide} onClick={showMediaModal} />
                        </div>
                        <div className="col-8 slide__box__item__content">
                            <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }} placeholder="Box Title" name='boxTitle' id='boxTitle' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxTitle', e.target.value)} value={attributes.boxTitle} />
                            <Input placeholder="ctaURL" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('ctaUrl', e.target.value)} value={attributes.ctaUrl} />
                            <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily }} placeholder="ctaText" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('ctaText', e.target.value)} value={attributes.ctaText} />
                            <TextArea style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }} rows={4} id='description' placeholder='Box Description' onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />
                        </div>
                    </div>
                </div>
            );
        },

        save: ({ attributes }: { attributes: any }) => {
            const blockProps = useBlockProps.save();
            return (
                <div className="item slider__slide__item">
                    <div className="slider__slide__item__content">
                        <h1 style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }}>{attributes.boxTitle}</h1>
                        <p style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }}>{attributes.boxDescription}
                        </p>
                        <a style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily }} href={attributes.ctaURL}>{attributes.ctaText}</a>
                    </div>
                    <img src={attributes.image_slide} alt={attributes.alt_slide} />
                </div>
            );
        },
    }
}
