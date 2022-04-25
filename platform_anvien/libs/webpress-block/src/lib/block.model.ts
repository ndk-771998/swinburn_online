/* eslint-disable @typescript-eslint/no-explicit-any */
interface BlockTypeExtra {
  source?: 'attribute' | 'text' | 'html' | 'query',
  selector?: string,
  attribute?: string,
  default?: any,
}
export interface BlockTypeAttribute extends BlockTypeExtra {
  type: 'null' | 'boolean' | 'object' | 'array' | 'string' | 'integer' | 'number'
}

export interface BlockEnumAttribute extends BlockTypeExtra {
  enum: any[]
}

export type BlockAttribute = BlockTypeAttribute | BlockEnumAttribute;

export interface SimpleBlockSetting {
  apiVersion: number,
  slug: string,
  title: string,
  namespace?: string,
  description?: string,
  dashicon?: string,
  category?: 'text' | 'media' | 'design' | 'widgets' | 'theme' | 'embed',
  attributes: Record<string, BlockAttribute>,
  author?: string,
  license?: string,
  licenseURI?: string,
  version?: string,
  editorScript?: string,
  editorStyle?: string,
  style?: string,
  supports?: Record<string, string | boolean>,
}

export interface CustomBlockSetting extends SimpleBlockSetting {
  edit: any,
  save: any,
}

export type BlockSetting = CustomBlockSetting | SimpleBlockSetting

export type Block = {
  name: string,
  settings: BlockSetting,
}
