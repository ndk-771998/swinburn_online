import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export { TheStoryItem } from './the-story-item';

export const TheStory: Block = {
  name: 'webpress/the-story',
  settings: {
    apiVersion: 2,
    title: 'The Story',
    slug: 'the-story',
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
      boxUrl: {
        type: 'string',
        default: 'assets/images/image.jpg'
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
