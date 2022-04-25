import './editor.scss';
import { Block } from '../../block.model';
import { Input } from 'antd';
import { Media, MediaSelector } from '@vicoders/editor';
import { useState } from '@wordpress/element';
import {
    Toolbar,
    ToolbarDropdownMenu,
    ToolbarGroup,
    ToolbarButton,
} from '@wordpress/components';
import {
    more,
    edit
} from '@wordpress/icons';
import {
    InspectorControls,
    useBlockProps,
    BlockControls,
    AlignmentToolbar,
    ColorPalette
} from '@wordpress/block-editor';

import {
    PanelBody,
    SelectControl,
    ColorPicker,
    FontSizePicker,
    __experimentalInputControl as InputControl,
} from '@wordpress/components';

import { ReasonBlockContext } from './reason.context';

const { TextArea } = Input;

export const ReasonItem: Block = {
    name: 'webpress/reason-item',
    settings: {
        apiVersion: 2,
        title: 'Reason Item',
        slug: 'reason-item',
        category: "widgets",
        attributes: {
            boxTitle: {
                type: 'string',
                default: 'Choose one great offer for your customers'
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
            ctaUrl: {
                type: 'string',
                default: '#'
            },
            ctaText: {
                type: 'string',
                default: 'Call to action'
            },
            swapContent: {
                type: 'string',
                default: ''
            },
            tagline: {
                type: 'string',
                default: ''
            },
            bgColor: {
                type: 'string',
                default: ''
            },
            position: {
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
            const { boxUrl, alt } = attributes;
            const [isMediaModalActive, setIsMediaModalActive] = useState(false);
            console.log(attributes.selectStyle);
            const showMediaModal = () => {
                setIsMediaModalActive(!isMediaModalActive);
            }

            const onSelect = (media: Media | undefined) => {
                if (media) {
                    setAttributes({ boxUrl: media.original_url, alt: media.alt_img });
                }
            }

            const onChangeAttribute = (attribute: string, value: string | number) => {
                setAttributes({ [attribute]: value });
            }
            const style = attributes.bgColor;
            return (
                <div {...blockProps} style={{ 'background': style }}>
                    <ReasonBlockContext.Provider value={attributes}>
                        <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{ width: 1, height: 1 }} />
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
                                    label="Swap Content"
                                    value={attributes.swapContent}
                                    options={[
                                        { value: 'default', label: 'Default' },
                                        { value: 'rtl', label: 'Swap' },
                                    ]}
                                    onChange={(value: string) => onChangeAttribute('swapContent', value)}
                                />
                                <p>Background Color</p>
                                <ColorPicker
                                    value={attributes.bgColor}
                                    onChange={(value: string) => onChangeAttribute('bgColor', value)}
                                />
                                <p>Title Color</p>
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
                        {attributes.selectStyle == "style-1" &&
                            (
                                <div className={`row ${attributes.swapContent}`}>
                                    <div className="col-md-6 reasons__image">
                                        <img src={boxUrl} alt={alt} onClick={showMediaModal} />
                                    </div>
                                    <div className="col-md-6 reasons__text-top">
                                        <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }} placeholder="title" name="boxTitle" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxTitle', e.target.value)} value={attributes.boxTitle} />

                                        <TextArea style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }} rows={4} name="boxDescription" placeholder="description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />

                                        <Input name="ctaUrl" placeholder="ctaURL" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('ctaUrl', e.target.value)} value={attributes.ctaUrl} />

                                        <Input style={{ fontFamily: attributes.fontFammily }} name="ctaText" placeholder="ctaText" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('ctaText', e.target.value)} value={attributes.ctaText} />
                                    </div>
                                </div>
                            )
                        }

                        {attributes.selectStyle == "style-2" &&
                            (
                                <div className={`row reason__box__item ${attributes.swapContent}`}>
                                    <div className="col-6">
                                        <div className="reason__box__item__title">
                                            <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }} placeholder="title" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxTitle', e.target.value)} value={attributes.boxTitle} />
                                        </div>
                                        <div className="reason__box__item__desc">
                                            <TextArea style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }} rows={4} placeholder="description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />
                                        </div>
                                    </div>
                                    <div className="col-6 reason__box__item__video">
                                        <Input placeholder="Link Video Youtube" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxVideo', e.target.value)} value={attributes.boxVideo} />
                                    </div>
                                </div>
                            )
                        }

                        {attributes.selectStyle == "style-3" &&
                            (
                                <div className={`row reason__box__item ${attributes.swapContent}`}>
                                    <div className="col-6">
                                        <div className="reason__box__item__content">

                                            <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }} placeholder="title" name="boxTitle" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxTitle', e.target.value)} value={attributes.boxTitle} />

                                            <TextArea style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }} rows={4} name="boxDescription" placeholder="description" onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />

                                            <Input style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }} name="tagLine" placeholder="tagLine" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('tagLine', e.target.value)} value={attributes.tagLine} />

                                            <Input name="ctaUrl" placeholder="ctaURL" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('ctaUrl', e.target.value)} value={attributes.ctaUrl} />

                                            <Input style={{ fontFamily: attributes.fontFammily }} name="ctaText" placeholder="ctaText" onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('ctaText', e.target.value)} value={attributes.ctaText} />
                                        </div>
                                    </div>
                                    <div className="col-6">
                                        <img src={boxUrl} alt={alt} onClick={showMediaModal} />
                                    </div>
                                </div>
                            )
                        }
                    </ReasonBlockContext.Provider>
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
                            <div className={`row ${attributes.swapContent}`} style={{ 'background': attributes.bgColor }}>
                                <div className="col-md-6 reasons__image">
                                    <a href="#"><img src={attributes.boxUrl} alt={attributes.alt} /></a>
                                </div>
                                <div className="col-md-6 reasons__text-top">
                                    <div className="row">
                                        <div className="col-md-7">
                                            <h2 style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }}>{attributes.boxTitle}</h2>
                                            <p style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }}>{attributes.boxDescription}</p>
                                            <a style={{fontFamily: attributes.fontFamily}} href={attributes.ctaUrl}>{attributes.ctaText}</a>
                                        </div>
                                        <div className="col-md-5"></div>
                                    </div>
                                </div>
                            </div>
                        )
                    }

                    {attributes.selectStyle == "style-2" &&
                        (
                            <div className={`row ${attributes.swapContent}`} style={{ 'background': attributes.bgColor }}>
                                <div className="col-md-6 reasons__text-middle">
                                    <div className="row">
                                        <div className="col-md-5"></div>
                                        <div className="col-md-7"><p>{attributes.tagLine}</p>
                                            <h2 style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }}>{attributes.boxTitle}</h2>
                                            <a style={{fontFamily: attributes.fontFamily}} href={attributes.ctaUrl}>{attributes.ctaText}</a>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-md-6 reasons__video">
                                    <iframe src={`https://www.youtube.com/embed/${link[1]}`} title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                                    <p style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }}>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam leo leo, tincidunt ac lectus vel, tincidunt scelerisque sapien. Quisque commodo orci at odio aliquet pretium. Sed faucibus eget turpis tincidunt tincidunt</p>
                                </div>
                            </div>
                        )
                    }

                    {attributes.selectStyle == "style-3" &&
                        (
                            <div className={`row ${attributes.swapContent}`} style={{ 'background': attributes.bgColor }}>
                                <div className="col-md-6 reasons__text-bottom">
                                    <div className="row">
                                        <div className="col-md-5">
                                        </div>
                                        <div className="col-md-7">
                                            <p style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }}>{attributes.tagLine}</p>
                                            <h2 style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.fontSize, color: attributes.textColor }}>{attributes.boxTitle}</h2>
                                            <p style={{ textAlign: attributes.alignment, fontFamily: attributes.fontFamily, fontSize: attributes.descFontSize, color: attributes.descColor }}>{attributes.boxDescription}</p>
                                            <a style={{fontFamily: attributes.fontFamily}} href={attributes.ctaUrl}>{attributes.ctaText}</a>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-md-6 reasons__image-bottom">
                                    <a href=""><img src={attributes.boxUrl} alt={attributes.alt} /></a>
                                </div>
                            </div>
                        )
                    }
                </div>
            );
        },
    }
}
