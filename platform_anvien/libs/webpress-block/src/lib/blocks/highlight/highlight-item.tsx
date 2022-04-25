import './editor.scss';
import {
    useBlockProps,
    InspectorControls,
    BlockControls,
    AlignmentToolbar,
    ColorPalette
} from '@wordpress/block-editor';
import { Block } from '../../block.model';
import { Input } from 'antd';
import { useState } from '@wordpress/element';
import { Media, MediaSelector } from '@vicoders/editor';
const { TextArea } = Input;
import {
    PanelBody,
    SelectControl,
    ToolbarGroup,
    ToolbarDropdownMenu,
    FontSizePicker,
    __experimentalInputControl as InputControl,
} from '@wordpress/components';
import { HighlightBlockContext } from './highlight.context';

import {
    more,
    edit
} from '@wordpress/icons';

export const HighlightItem: Block = {
    name: 'webpress/highlight-item',
    settings: {
        apiVersion: 2,
        title: 'Highlight Item',
        slug: 'highlight-item',
        category: "widgets",
        attributes: {
            boxTitle: {
                type: 'string',
                default: "Here's your reasons"
            },
            boxNumber: {
                type: 'string',
                default: '49'
            },
            boxDescription: {
                type: 'string',
                default: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt atque natus, odio porro ducimus vitae, voluptatum officia ipsum a recusandae quaerat reprehenderit rem suscipit voluptate hic reiciendis nesciunt magnam sapiente?'
            },
            boxUrl: {
                type: 'string',
                default: 'assets/images/image.jpg'
            },
            alt: {
                type: 'string',
                default: ''
            },
            styleBox: {
                type: 'string',
                default: 'style-1'
            },
            alignmentItem: {
                type: 'string',
                default: ''
            },
            fontFamilyItem: {
                type: 'string',
                default: ''
            },
            textColorTitle: {
                type: 'string',
                default: ''
            },
            fontSizeTitle: {
                type: 'string',
                default: ''
            },
            textColorDesc: {
                type: 'string',
                default: ''
            },
            fontSizeDesc: {
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
            return (
                <div {...blockProps}>
                    <HighlightBlockContext.Provider value={attributes}>
                        <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{ width: 2, height: 1 }} />
                        <BlockControls>
                            <AlignmentToolbar
                                value={attributes.alignmentItem}
                                onChange={(value: string) =>
                                    onChangeAttribute('alignmentItem', value)
                                }
                            />
                            <ToolbarGroup>
                                <ToolbarDropdownMenu
                                    icon={more}
                                    label="Select a font family"
                                    controls={[
                                        {
                                            title: 'Roboto',
                                            onClick: () => onChangeAttribute('fontFamilyItem', 'Roboto'),
                                        },
                                        {
                                            title: 'Montserrat',
                                            onClick: () =>
                                                onChangeAttribute('fontFamilyItem', 'Montserrat'),
                                        },
                                        {
                                            title: 'Roboto Slab',
                                            onClick: () =>
                                                onChangeAttribute('fontFamilyItem', 'Roboto Slab'),
                                        },
                                        {
                                            title: 'Lobster',
                                            onClick: () => onChangeAttribute('fontFamilyItem', 'Lobster'),
                                        },
                                        {
                                            title: 'Tinos',
                                            onClick: () => onChangeAttribute('fontFamilyItem', 'Tinos'),
                                        },
                                    ]}
                                />
                                {/* <InputControl
                                    label="Font size(px)"
                                    labelPosition="edge"
                                    value={attributes.fontSizeTitle}
                                    onChange={(value: any) => onChangeAttribute('fontSizeTitle', value)}
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
                                    label="Select Style Box"
                                    value={attributes.styleBox}
                                    options={[
                                        { value: 'style-1', label: 'Style 1' },
                                        { value: 'style-2', label: 'Style 2' },
                                        { value: 'style-3', label: 'Style 3' }
                                    ]}
                                    onChange={(value: string) => onChangeAttribute('styleBox', value)}
                                />
                                <p>Text Title Color</p>
                                <ColorPalette
                                    value={attributes.textColorTitle}
                                    onChange={(value: string) =>
                                        onChangeAttribute('textColorTitle', value)
                                    }
                                />
                                <p>Title Font Size Item </p>
                                <FontSizePicker
                                    value={attributes.fontSizeTitle}
                                    onChange={(value: any) =>
                                        onChangeAttribute('fontSizeTitle', value)
                                    }
                                />
                                <p>Text Description Color</p>
                                <ColorPalette
                                    value={attributes.textColorDesc}
                                    onChange={(value: string) =>
                                        onChangeAttribute('textColorDesc', value)
                                    }
                                />
                                <p>Description Font Size Item </p>
                                <FontSizePicker
                                    value={attributes.fontSizeDesc}
                                    onChange={(value: any) =>
                                        onChangeAttribute('fontSizeDesc', value)
                                    }
                                />
                            </PanelBody>
                        </InspectorControls>
                        {attributes.styleBox == 'style-1' &&
                            (
                                <div className="hightlight__box__item style-1">
                                    <div className="highlight__box__item__image">
                                        <img src={boxUrl} alt={alt} onClick={showMediaModal} />
                                    </div>
                                    <div className="highlight__box__item__title">
                                        <Input style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeTitle, color: attributes.textColorTitle }} placeholder="Box Title" name='boxTitle' id='boxTitle' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxTitle', e.target.value)} value={attributes.boxTitle} />
                                    </div>
                                    <div className="highlight__box__item__desc">
                                        <TextArea style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeDesc, color: attributes.textColorDesc }} rows={4} id='description' placeholder='Box Description' onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />
                                    </div>
                                </div>
                            )
                        }

                        {attributes.styleBox == 'style-2' &&
                            (
                                <div className="hightlight__box__item style-2">
                                    <div className="highlight__box__item__image">
                                        <img src={boxUrl} alt={alt} onClick={showMediaModal} />
                                    </div>
                                    <div className="highlight__box__item__number">
                                        <Input style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeTitle, color: attributes.textColorTitle }} placeholder="Box Number" name='boxNumber' id='boxNumber' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxNumber', e.target.value)} value={attributes.boxNumber} />
                                    </div>
                                    <div className="highlight__box__item__desc">
                                        <TextArea style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeDesc, color: attributes.textColorDesc }} rows={2} id='description' placeholder='Box Description' onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />
                                    </div>
                                </div>
                            )
                        }
                        {attributes.styleBox == 'style-3' &&
                            (
                                <div className="hightlight__box__item style-3">
                                    <div className="highlight__box__item__number">
                                        <Input style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeTitle, color: attributes.textColorTitle }} placeholder="Box Number" name='boxNumber' id='boxNumber' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxNumber', e.target.value)} value={attributes.boxNumber} />
                                    </div>
                                    <div className="highlight__box__item__desc">
                                        <TextArea style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeDesc, color: attributes.textColorDesc }} rows={2} id='description' placeholder='Box Description' onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />
                                    </div>
                                </div>
                            )
                        }
                    </HighlightBlockContext.Provider>
                </div>
            );
        },

        save: ({ attributes }: { attributes: any }) => {
            const blockProps = useBlockProps.save();
            return (
                <>
                    {
                        attributes.styleBox == 'style-1' && (
                            <div className="col-md-4 slide__item">
                                <div className="highlights__content-image">
                                    <a href="#"><img src={attributes.boxUrl} alt={attributes.alt} /></a>
                                </div>
                                <div className="highlights__content-title" style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeTitle, color: attributes.textColorTitle }}>
                                    {attributes.boxTitle}
                                </div>
                                <div className="highlights__content-desc" style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeDesc, color: attributes.textColorDesc }}>
                                    {attributes.boxDescription}
                                </div>
                            </div>
                        )
                    }
                    {
                        attributes.styleBox == 'style-2' && (
                            <div className="col-6 col-md-3">
                                <a href="#"><img src={attributes.boxUrl} alt={attributes.alt} /></a>
                                <h3 style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeTitle, color: attributes.textColorTitle }}>{attributes.boxNumber}</h3>
                                <p style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeDesc, color: attributes.textColorDesc }}>{attributes.boxDescription}</p>
                            </div>
                        )
                    }
                    {
                        attributes.styleBox == 'style-3' && (
                            <div className="highlights__item col-6 col-md-3">
                                <div className="highlights__icon">
                                    <h3 style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeTitle, color: attributes.textColorTitle }}>{attributes.boxNumber}</h3>
                                </div>
                                <p style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, fontSize: attributes.fontSizeDesc, color: attributes.textColorDesc }}>{attributes.boxDescription}</p>
                            </div>
                        )
                    }
                </>
            );
        },
    }
}
