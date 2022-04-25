import { createContext } from 'react';

export const HighlightBlockContext = createContext<Record<string, any> | undefined>(undefined);