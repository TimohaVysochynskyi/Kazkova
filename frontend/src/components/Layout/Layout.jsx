import Header from "../Header/Header";
import Footer from "../Footer/Footer";
import css from "./Layout.module.css";

export default function Layout({ children }) {
  return (
    <>
      <Header />
      <main className={css.container}>{children}</main>
      <Footer />
    </>
  );
}
