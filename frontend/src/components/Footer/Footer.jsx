import Navigation from "../Navigation/Navigation";
import css from "./Footer.module.css";

export default function Footer() {
  return (
    <>
      <footer className={css.footer}>
        <Navigation />
        <span className={css.author}>
          Автор:{" "}
          <a href="https://github.com/TimohaVysochynskyi">
            Височинський Тимофій
          </a>
        </span>
      </footer>
    </>
  );
}
