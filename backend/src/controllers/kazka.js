import createHttpError from 'http-errors';
import { getAllKazka, getKazkaById } from '../services/kazka.js';

// GET
export const getAllKazkaController = async (req, res, next) => {
  const kazkas = await getAllKazka();

  res.status(200).send({
    status: 200,
    message: 'Successfully found kazkas!',
    data: kazkas,
  });
};

export const getKazkaByIdController = async (req, res, next) => {
  const { kazkaId } = req.params;

  const kazka = await getKazkaById(kazkaId);

  if (!kazka) {
    return next(createHttpError(404, 'Kazka not found'));
  }

  res.status(200).send({
    status: 200,
    message: `Successfully found kazka with id ${kazkaId}!`,
    data: kazka,
  });
};
