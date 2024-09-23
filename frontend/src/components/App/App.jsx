import { lazy, Suspense } from 'react';
import Layout from '../Layout/Layout';
import { Routes, Route } from 'react-router-dom';

import Loader from '../Loader/Loader';

import css from './App.module.css';

const HomePage = lazy(() => import("../../pages/HomePage/HomePage"));
const FeedbackPage = lazy(() => import("../../pages/FeedbackPage/FeedbackPage"));
const DonationPage = lazy(() => import("../../pages/DonationPage/DonationPage"));
const NotFoundPage = lazy(() => import("../../pages/NotFoundPage/NotFoundPage"));

export default function App() {
    return (
        <>
            <Layout>
                <Suspense fallback={
                    <div className={css.loaderWrapper}>
                        <Loader />
                    </div>
                }>
                    <Routes>
                        <Route path="/" element={<HomePage />} />
                        <Route path="/feedbacks" element={<FeedbackPage />} />
                        <Route path="/donations" element={<DonationPage />} />
                        <Route path="*" element={<NotFoundPage />} />
                    </Routes>
                </Suspense>
            </Layout>
        </>
    )
}