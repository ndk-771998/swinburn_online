import './editor.scss';
import { Block } from '../../block.model';
import { Input } from 'antd';
import { Media, MediaSelector } from '@vicoders/editor';
import { useState } from '@wordpress/element';

import {
    AlignmentToolbar,
    BlockControls,
    InspectorControls,
    useBlockProps,
    ColorPalette
} from '@wordpress/block-editor';

import {
    PanelBody,
    SelectControl,
    ColorPicker,
    ToolbarGroup,
    ToolbarDropdownMenu,
    Card,
    CardMedia,
    FontSizePicker,
    __experimentalInputControl as InputControl,
} from '@wordpress/components';

import {
    more,
    edit
} from '@wordpress/icons';

import { StoryBlockContext } from './story.context';
import { url } from 'inspector';

const { TextArea } = Input;

export const TheStoryItem: Block = {
    name: 'webpress/the-story-item',
    settings: {
        apiVersion: 2,
        title: 'The Story Item',
        slug: 'the-story-item',
        category: "widgets",
        attributes: {
            boxTitle: {
                type: 'string',
                default: 'The story of us'
            },
            boxDescription: {
                type: 'string',
                default: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo leo, tincidunt ac lectus vel, tincidunt scelerisque sapien. Quisque commodo orci at odio aliquet pretium. Sed faucibus eget turpis tincidunt tincidunt. Maecenas vel lorem finibus, iaculis diam id, venenatis odio. Curabitur ante metus, luctus quis vestibulum non, rutrum vel nisl. In hac habitasse platea dictumst. Pellentesque varius'
            },
            boxVideo: {
                type: 'string',
                default: 'https://www.youtube.com/watch?v=q3sf2iEAdR4'
            },
            selectStyle: {
                type: 'string',
                default: 'style-1'
            },
            boxUrl: {
                type: 'string',
                default: 'assets/images/image.jpg'
            },
            alt: {
                type: 'string',
                default: ''
            },
            bgColor: {
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
            bgImage: {
                type: 'string',
                default: 'assets/images/image.jpg'
            },
            bgAlt: {
                type: 'string',
                default: ''
            },
            selectBackground: {
                type: 'string',
                default: 'image'
            },
            textColor: {
                type: 'string',
                default: ''
            },
            fontSize: {
                type: 'string',
                default: ''
            },
            descColor: {
                type: 'string',
                default: ''
            },
            descFontSize: {
                type: 'string',
                default: ''
            }
        },
        edit: ({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) => {
            // eslint-disable-next-line react-hooks/rules-of-hooks
            const blockProps = useBlockProps();
            const { boxUrl, alt, bgImage, bgAlt } = attributes;

            const [isMediaModalActive, setIsMediaModalActive] = useState(false);

            const [isMediaModalBackgroundActive, setIsMediaModalBackgroundActive] = useState(false);

            const showMediaModal = () => {
                setIsMediaModalActive(!isMediaModalActive);
            }

            const showMediaModalBg = () => {
                setIsMediaModalBackgroundActive(!isMediaModalBackgroundActive);
            }

            const onSelect = (media: Media | undefined) => {
                if (media) {
                    setAttributes({ boxUrl: media.original_url, alt: media.alt_img });
                }
            }

            const onSelectBg = (media_bg: Media | undefined) => {
                if (media_bg) {
                    setAttributes({ bgImage: media_bg.original_url, bgAlt: media_bg.alt_img });
                }
            }

            const onChangeAttribute = (attribute: string, value: string | number) => {
                setAttributes({ [attribute]: value });
            }

            const style = attributes.bgColor;

            return (
                <div {...blockProps}>
                    <StoryBlockContext.Provider value={attributes}>
                        <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{ width: 2, height: 1 }} />
                        <MediaSelector isModalVisible={isMediaModalBackgroundActive} onSelect={onSelectBg} aspect={{ width: 2, height: 1 }} />
                        <InspectorControls>
                            <PanelBody title="Settings">
                                <SelectControl
                                    label="Select Style"
                                    value={attributes.selectStyle}
                                    options={[
                                        { value: 'style-1', label: 'Style 1' },
                                        { value: 'style-2', label: 'Style 2' },
                                        { value: 'style-3', label: 'Style 3' }
                                    ]}
                                    onChange={(value: string) => onChangeAttribute('selectStyle', value)}
                                />
                                <SelectControl
                                    label="Select Background"
                                    value={attributes.selectBackground}
                                    options={[
                                        { value: 'image', label: 'Background Image' },
                                        { value: 'color', label: 'Background Color' },
                                    ]}
                                    onChange={(value: string) => onChangeAttribute('selectBackground', value)}
                                />
                            </PanelBody>
                            {
                                attributes.selectBackground == "color" ? (
                                    <PanelBody>
                                        <ColorPicker
                                            value={attributes.bgColor}
                                            onChange={(value: string) => onChangeAttribute('bgColor', value)}
                                        />
                                    </PanelBody>
                                ) : (
                                    <PanelBody>
                                        <Card>
                                            <CardMedia>
                                                <img src={bgImage} alt={bgAlt} onClick={showMediaModalBg} />
                                            </CardMedia>
                                        </Card>
                                    </PanelBody>
                                )
                            }
                            <PanelBody>
                                <p>Text Color</p>
                                <ColorPalette
                                    value={attributes.textColor}
                                    onChange={(value: string) =>
                                        onChangeAttribute('textColor', value)
                                    }
                                />
                                <p>Font Size Title</p>
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
                                <p>Font Size Description</p>
                                <FontSizePicker
                                    value={attributes.descFontSize}
                                    onChange={(value: any) =>
                                        onChangeAttribute('descFontSize', value)
                                    }
                                />
                            </PanelBody>
                        </InspectorControls>

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
                                />
                                <IconButton
                                    label="My very own custom button"
                                    icon={edit}
                                    className="my-custom-button"
                                    onClick={() => console.log('pressed button')}
                                /> */}
                            </ToolbarGroup>
                        </BlockControls>
                        {attributes.selectStyle == "style-1" &&
                            (
                                <div className="story__box__item style-1" style={{ background: style }}>
                                    <div className="story__box__item__title">
                                        <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }} placeholder="title" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxTitle', e.target.value)} value={attributes.boxTitle} />
                                    </div>
                                    <div className="story__box__item__desc">
                                        <TextArea style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }} rows={4} placeholder="description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />
                                    </div>
                                    <div className="story__box__item__image">
                                        <img src={boxUrl} alt={alt} onClick={showMediaModal} />
                                    </div>
                                </div>
                            )
                        }

                        {attributes.selectStyle == "style-2" &&
                            (

                                <div className="story__box__item style-2" style={{ background: style }}>
                                    <div className="story__box__item__title">
                                        <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }} placeholder="title" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxTitle', e.target.value)} value={attributes.boxTitle} />
                                    </div>
                                    <div className="story__box__item__desc">
                                        <TextArea style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }} rows={4} placeholder="description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />
                                    </div>
                                    <div className="story__box__item__video">
                                        <Input placeholder="Link Video Youtube" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxVideo', e.target.value)} value={attributes.boxVideo} />
                                    </div>
                                </div>
                            )
                        }

                        {attributes.selectStyle == "style-3" &&
                            (
                                <div className="story__box__item style-3" style={{ background: style }}>
                                    <div className="story__box__item__title">
                                        <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }} placeholder="title" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxTitle', e.target.value)} value={attributes.boxTitle} />
                                    </div>
                                    <div className="row">
                                        <div className="story__box__item__image col-6">
                                            <img src={boxUrl} alt={alt} onClick={showMediaModal} />
                                        </div>
                                        <div className="story__box__item__desc col-6">
                                            <TextArea style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }} rows={4} placeholder="description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />
                                        </div>
                                    </div>
                                </div>
                            )
                        }
                    </StoryBlockContext.Provider>
                </div>
            );
        },

        save: ({ attributes }: { attributes: any }) => {
            const blockProps = useBlockProps.save();
            var link = (attributes.boxVideo).split('v=');
            return (
                <div>
                    {attributes.selectStyle == "style-1" &&
                        (
                            <div className="story__top"
                                style={attributes.bgColor ? { 'background': attributes.bgColor } : { 'background': `url(${attributes.bgImage})` }}>
                                <div className="container">
                                    <div className="row">
                                        <div className="col-md-12 story__content-top">
                                            <h2 style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }}>{attributes.boxTitle}</h2>
                                            <p style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }}>{attributes.boxDescription}</p>
                                            <div className="story__banner-top">
                                                <a href="#"><img src={attributes.boxUrl} alt={attributes.alt} /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        )
                    }

                    {attributes.selectStyle == "style-2" &&
                        (
                            <div className="story__middle" style={attributes.bgColor ? { 'background': attributes.bgColor } : { 'background': `url(${attributes.bgImage})` }}>
                                <div className="container">
                                    <div className="row">
                                        <div className="col-md-12 story__content-middle">
                                            <h2 style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }}>{attributes.boxTitle}</h2>
                                            <p style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }}>{attributes.boxDescription}</p>
                                            <div className="story__banner-middle">
                                                <iframe width="720" height="405" src={`https://www.youtube.com/embed/${link[1]}`}></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        )
                    }

                    {attributes.selectStyle == "style-3" &&
                        (
                            <div className="story__bottom" style={attributes.bgColor ? { 'background': attributes.bgColor } : { 'background': `url(${attributes.bgImage})` }}>
                                <div className="container">
                                    <div className="row">
                                        <div className="col-md-12 story__content-bottom">
                                            <h2 style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }}>{attributes.boxTitle}</h2>
                                            <div className="row">
                                                <div className="story__banner-bottom col-sm-6">
                                                    <a href="#"></a>
                                                </div>
                                                <div className="story__text col-sm-6">
                                                    <p style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }}>{attributes.boxDescription}</p>
                                                </div>
                                            </div>
                                        </div>
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
