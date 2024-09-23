import axios from "axios";

export const getKazkas = async () => {
  const response = await axios.get(`https://kazkova.onrender.com/kazka/`);

  return response.data;
};

export const getKazkaById = async (kazkaId) => {
  const response = await axios.get(
    `https://kazkova.onrender.com/kazka/${kazkaId}`,
  );

  return response.data;
};
