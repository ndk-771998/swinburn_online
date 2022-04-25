import { Input } from 'antd';
import './editor.scss';
import { Media, MediaSelector } from '@vicoders/editor';
import { useState } from '@wordpress/element';
import {
    InnerBlocks,
    useBlockProps,
} from '@wordpress/block-editor';

const { TextArea } = Input;

const SliderItemTeamplate = [
    ['webpress/slider-item', {}],
];
const ALLOWED_BLOCKS = ['webpress/slider-item'];

export default function Edit({ attributes, isSelected, setAttributes }: { attributes: any, isSelected: boolean, setAttributes: any }) {

    const { image_background, alt_background} = attributes;
    const [isMediaModalActive, setIsMediaModalActive] = useState(false);

    const showMediaModal = () => {
        setIsMediaModalActive(!isMediaModalActive);
    }

    const onSelect = (media: Media | undefined) => {
        if (media) {
            setAttributes({ image_background: media.original_url, alt_background: media.alt_img });
        }
    }
    return (
        <div className="slider" {...useBlockProps()}>
            <MediaSelector isModalVisible={isMediaModalActive} onSelect={onSelect} aspect={{width:2, height:1}} />
            <div>
                <InnerBlocks
                    template={SliderItemTeamplate}
                    allowedBlocks={ALLOWED_BLOCKS}
                />
            </div>
            <div className="row">
                <div className="col-12 slider__image">
                    <img src={image_background} alt={alt_background} onClick={showMediaModal} />
                </div>
            </div>
        </div>
    );
}