import { KazkaCollection } from '../models/kazka.js';

export const getAllKazka = async () => {
  const kazkas = await KazkaCollection.find();

  return kazkas;
};

export const getKazkaById = async (kazkaId) => {
  const kazka = await KazkaCollection.findOne({ _id: kazkaId });

  return kazka;
};
