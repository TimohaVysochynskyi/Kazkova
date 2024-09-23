import axios from "axios";

export const getFeedbacks = async () => {
  const response = await axios.get(`https://kazkova.onrender.com/feedbacks/`);

  return response.data;
};

export const createFeedback = async ({ name, feedback }) => {
  const response = await axios.post(`https://kazkova.onrender.com/feedbacks/`, {
    name,
    feedback,
  });

  return response.data;
};
