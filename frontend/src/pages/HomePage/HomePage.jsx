import Banner from "../../components/Banner/Banner";
import css from "./HomePage.module.css";

export default function HomePage() {
  return (
    <>
      <Banner />
      <h1 className={css.title}>Welcome to KAZKOVA</h1>
    </>
  );
}
