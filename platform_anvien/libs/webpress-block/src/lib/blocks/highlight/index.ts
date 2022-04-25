import { Block } from '../../block.model';
import Edit from './edit';
import save from './save';

export { HighlightItem } from './highlight-item';

export const Highlight: Block = {
  name: 'webpress/highlight',
  settings: {
    apiVersion: 2,
    title: 'Highlight',
    slug: 'highlight',
    category: "widgets",
    attributes: {
      title: {
        type: 'string',
        default: 'Reasons why people should buy from you'
      },
      description: {
        type: 'string',
        default: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda exercitationem ex esse maiores, sapiente culpa repudiandae odit, ipsam fugiat mollitia ipsum voluptates, molestiae debitis sed. Error ut eveniet quis atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut magnam esse placeat perferendis repellat quidem ratione id voluptas natus alias? Nesciunt consequatur minus illum officia quis unde est ex perspiciatis.'
      },
      ctaText: {
        type: 'string',
        default: 'Call to action'
      },
      ctaUrl: {
        type: 'string',
        default: '#'
      },
      selectStyle: {
        type: 'string',
        default: 'style-1'
      },
      bgColor: {
        type: 'string',
        default: ''
      },
      fontFamily: {
        type: 'string',
        default: ''
      },
      alignment: {
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
