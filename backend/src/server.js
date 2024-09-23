import express from 'express';
import pino from 'pino-http';
import cors from 'cors';

import kazkaRouter from './routers/kazka.js';
import feedbackRouter from './routers/feedbacks.js';

import { notFoundHandler } from './middlewares/notFoundHandler.js';
import { errorHandler } from './middlewares/errorHandler.js';

export const setupServer = () => {
  const PORT = Number(process.env.PORT);

  const app = express();

  app.use(express.json());

  app.use(
    pino({
      transport: {
        target: 'pino-pretty',
      },
    }),
  );
  app.use(cors());

  app.use('/kazka', kazkaRouter);
  app.use('/feedbacks', feedbackRouter);

  app.use(notFoundHandler);
  app.use(errorHandler);

  app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
  });
};
