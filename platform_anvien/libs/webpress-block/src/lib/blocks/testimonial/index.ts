import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export const Testimonial: Block = {
  name: 'webpress/testimonial',
  settings: {
    apiVersion: 2,
    title: 'Testimonial',
    slug: 'testimonial',
    category: "widgets",
    attributes: {
      items: {
        type: 'array',
        default: [{
          user: '',
          message: '',
          img: '/assets/images/user.png'
        }]
      },
    },
    edit: Edit,
    save,
  }
}
