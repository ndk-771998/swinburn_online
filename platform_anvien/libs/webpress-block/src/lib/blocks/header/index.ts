import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export const Header: Block = {
  name: 'webpress/header',
  settings: {
    apiVersion: 2,
    title: 'Header',
    slug: 'header',
    category: "widgets",
    attributes: {
      download_link: {
        type: 'string',
        default: 'Download my 10 steps how to make a pizza !'
      },
      ctaUrl: {
        type: 'string',
        default: ''
      },
      ctaText: {
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
      bg_color: {
        type: 'string',
        default: ''
      },
      fontFamily: {
        type: 'string',
        default: ''
      },
      alignment: {
        type: 'string',
        default: 'none'
      },
      textColor: {
        type: 'string',
        default: ''
      },
      fontSize: {
        type: 'string',
        default: ''
      }
    },
    edit: Edit,
    save,
  }
}
