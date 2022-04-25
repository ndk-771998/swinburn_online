import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export const Contact: Block = {
  name: 'webpress/contact',
  settings: {
    apiVersion: 2,
    title: 'Contact',
    slug: 'contact',
    category: "widgets",
    attributes: {
      title: {
        type: 'string',
        default: ''
      },
      description: {
        type: 'string',
        default: ''
      },
      counterHour: {
        type: 'string',
        default: ''
      },
      counterDay: {
        type: 'string',
        default: ''
      },
      counterMonth: {
        type: 'string',
        default: ''
      },
      counterYear: {
        type: 'string',
        default: ''
      },
      formHeading: {
        type: 'string',
        default: ''
      },
      counterHeading: {
        type: 'string',
        default: ''
      },
      counterDescription: {
        type: 'string',
        default: ''
      },
      bg_color: { 
        type: 'string', 
        default: '' 
      },
      style: {
        type: 'string',
        default: 'style-1'
      }
    },
    edit: Edit,
    save,
  }
}
