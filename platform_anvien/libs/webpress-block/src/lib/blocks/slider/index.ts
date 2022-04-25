import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';
export { SliderItem } from './slider-item';

export const Slider: Block = {
    name: 'webpress/slider',
    settings: {
        apiVersion: 2,
        title: 'Slider',
        slug: 'slider',
        category: "widgets",
        attributes: {
            image_background: {
                type: 'string',
                default: 'assets/images/image.jpg'
            },
            alt_background: {
                type: 'string',
                default: ''
            },
        },
        edit: Edit,
        save,
    }
}
