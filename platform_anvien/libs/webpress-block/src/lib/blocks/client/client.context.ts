import { createContext } from 'react';

export const ClientBlockContext = createContext<Record<string, any> | undefined>(undefined);
