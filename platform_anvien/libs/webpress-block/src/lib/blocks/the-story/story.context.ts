import { createContext } from 'react';

export const StoryBlockContext = createContext<Record<string, any> | undefined>(undefined);