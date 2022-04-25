import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export { FooterTopItem } from './footer-top-item';

export const FooterTop: Block = {
  name: 'webpress/footer-top',
  settings: {
    apiVersion: 2,
    title: 'Footer Top',
    slug: 'footer-top',
    category: "widgets",
    attributes: {
      logo: {
        type: 'string',
        default: 'assets/images/image.jpg'
      },
      logo_url: {
        type: 'string',
        default: ''
      },
      name: {
        type: 'string',
        default: ''
      },
      alt: {
        type: 'string',
        default: ''
      },
    },
    edit: Edit,
    save,
  }
}
