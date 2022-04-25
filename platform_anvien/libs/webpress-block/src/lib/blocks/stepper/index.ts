import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export { StepperItem } from './stepper-item';

export const Stepper: Block = {
  name: 'webpress/stepper',
  settings: {
    apiVersion: 2,
    title: 'Stepper',
    slug: 'stepper',
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
      bgColor: {
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
    edit: Edit,
    save,
  }
}
