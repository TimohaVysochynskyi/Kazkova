import { isValidObjectId } from 'mongoose';
import createHttpError from 'http-errors';

export const isValidId = (req, res, next) => {
  const { kazkaId } = req.params;
  if (!isValidObjectId(kazkaId)) {
    next(createHttpError(400, 'Bad Request'));
  }
  next();
};
