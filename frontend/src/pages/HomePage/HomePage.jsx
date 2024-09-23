import { useState, useEffect } from "react";

import { getKazkas } from "../../kazka-api.js";

import Banner from "../../components/Banner/Banner";
import Loader from "../../components/Loader/Loader";
import ErrorMessage from "../../components/ErrorMessage/ErrorMessage";
import KazkaList from "../../components/KazkaList/KazkaList";
import KazkaModal from "../../components/KazkaModal/KazkaModal";
import FeedbackForm from "../../components/FeedbackForm/FeedbackForm.jsx";

import css from "./HomePage.module.css";

export default function HomePage() {
  const [kazkas, setKazkas] = useState([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(false);

  const [isModal, setIsModal] = useState(false);
  const [modalData, setModalData] = useState([]);

  useEffect(() => {
    async function fetchKazkas() {
      try {
        setError(false);
        setLoading(true);
        const response = await getKazkas();
        setKazkas(response.data);
      } catch (error) {
        setError(true);
        console.error(error);
      } finally {
        setLoading(false);
      }
    }
    fetchKazkas();
  }, []);

  const handleModalOpen = async (data) => {
    setIsModal(true);
    setModalData(data);
  };

  const handleModalClose = async () => {
    setIsModal(false);
    setModalData([]);
  };

  return (
    <>
      <Banner />
      <main className={css.container}>
        {loading && <Loader />}
        {error && <ErrorMessage />}
        {kazkas.length > 0 && (
          <KazkaList kazkas={kazkas} openModal={handleModalOpen} />
        )}
        <FeedbackForm />
      </main>

      {isModal && (
        <KazkaModal
          data={modalData}
          isOpen={isModal}
          onClose={handleModalClose}
        />
      )}
    </>
  );
}
