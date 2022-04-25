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
import {
    PanelBody,
    ToolbarGroup,
    TextControl,
    ToolbarDropdownMenu,
    __experimentalInputControl as InputControl,
    FontSizePicker
} from '@wordpress/components';

import {
    more,
    edit
} from '@wordpress/icons';
import { at } from 'lodash';
import { useState } from '@wordpress/element';
import { Media, MediaSelector } from '@vicoders/editor';
const { TextArea } = Input;

export const ProcessItem: Block = {
    name: 'webpress/process-item',
    settings: {
        apiVersion: 2,
        title: 'Process Item',
        slug: 'process-item',
        category: "widgets",
        attributes: {
            boxTitle: {
                type: 'string',
                default: ''
            },
            boxDescription: {
                type: 'string',
                default: ''
            },
            tagLine: {
                type: 'string',
                default: ''
            },
            year: {
                type: 'string',
                default: ''
            },
            boxUrl: {
                type: 'string',
                default: 'assets/images/image.jpg'
            },
            alt: {
                type: 'string',
                default: ''
            },
            url: {
                type: 'string',
                default: ''
            },
            alignmentItem: {
                type: 'string',
                default: ''
            },
            fontFamilyItem: {
                type: 'string',
                default: ''
            },
            textColorItem: {
                type: 'string',
                default: ''
            },
            fontSizeItem: {
                type: 'string',
                default: ''
            },
            descColorItem: {
                type: 'string',
                default: ''
            },
            descFontSizeItem: {
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
                    <InspectorControls>
                        <PanelBody title="Settings">
                            <TextControl
                                label="Link"
                                help="Link redirect to other page"
                                value={attributes.url}
                                onChange={(value: string) => onChangeAttribute('url', value)}
                            />
                        </PanelBody>
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
                                    value={attributes.fontSizeItem}
                                    onChange={(value: any) => onChangeAttribute('fontSizeItem', value)}
                                />
                                <IconButton
                                    label="My very own custom button"
                                    icon={edit}
                                    className="my-custom-button"
                                    onClick={() => console.log('pressed button')}
                                /> */}
                            </ToolbarGroup>
                        </BlockControls>
                        <PanelBody>
                            <p>Title Item Color</p>
                            <ColorPalette
                                value={attributes.textColorItem}
                                onChange={(value: string) =>
                                    onChangeAttribute('textColorItem', value)
                                }
                            />

                            <p>Title Item Font Size</p>
                            <FontSizePicker
                                value={attributes.fontSizeItem}
                                onChange={(value: string) =>
                                    onChangeAttribute('fontSizeItem', value)
                                }
                            />

                            <p>Description Item Color</p>
                            <ColorPalette
                                value={attributes.descColorItem}
                                onChange={(value: string) =>
                                    onChangeAttribute('descColorItem', value)
                                }
                            />

                            <p>Description Item Font Size</p>
                            <FontSizePicker
                                value={attributes.descFontSizeItem}
                                onChange={(value: string) =>
                                    onChangeAttribute('descFontSizeItem', value)
                                }
                            />
                        </PanelBody>
                    </InspectorControls>
                    <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{ width: 1, height: 1 }} />
                    <div className="process__box__item">
                        <div className="process__box__item__title">
                            <Input style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, color: attributes.textColorItem, fontSize: attributes.fontSizeItem }} placeholder="box title" id='title' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('boxTitle', e.target.value)} value={attributes.boxTitle} />
                            <TextArea style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, color: attributes.descColorItem, fontSize: attributes.descFontSizeItem }} rows={4} placeholder="box description" id='desc_box' onChange={(e: React.ChangeEvent<HTMLTextAreaElement>) => onChangeAttribute('boxDescription', e.target.value)} value={attributes.boxDescription} />
                        </div>
                        <div className="process__box__item__image col-5">
                            <img src={boxUrl} alt={alt} onClick={showMediaModal} />
                        </div>
                        <div className="process__box__item__year">
                            <Input style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, color: attributes.textColorItem, fontSize: attributes.fontSizeItem }} placeholder="Year" id='step' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('year', e.target.value)} value={attributes.year} />
                        </div>
                        <div className="process__box__item__tagline">
                            <Input style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, color: attributes.descColorItem, fontSize: attributes.descFontSizeItem }} placeholder="Tag Line" id='step' onChange={(e: React.ChangeEvent<HTMLInputElement>) => onChangeAttribute('tagLine', e.target.value)} value={attributes.tagLine} />
                        </div>
                    </div>
                </div>
            );
        },

        save: ({ attributes }: { attributes: any }) => {
            const blockProps = useBlockProps.save();
            return (
                <div className="process__item">
                    <div className="process__item-title">
                        <h5 style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, color: attributes.textColorItem, fontSize: attributes.fontSizeItem }}>{attributes.boxTitle}</h5>
                        <p style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, color: attributes.descColorItem, fontSize: attributes.descFontSizeItem }}>{attributes.boxDescription}</p>
                        <a href={attributes.url}><img src={attributes.boxUrl} alt={attributes.alt} /></a>
                    </div>
                    <div className="process__border"></div>
                    <div className="process__item-content">
                        <h5 style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, color: attributes.textColorItem, fontSize: attributes.fontSizeItem }}>{attributes.year}</h5>
                        <p style={{ textAlign: attributes.alignmentItem, fontFamily: attributes.fontFamilyItem, color: attributes.descColorItem, fontSize: attributes.descFontSizeItem }}>{attributes.tagLine}</p>
                    </div>
                </div>
            );
        },
    }
}
