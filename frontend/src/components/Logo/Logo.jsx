import css from "./Logo.module.css";

export default function Logo() {
  return (
    <model-viewer
      src="/logo.glb"
      alt="Анімований логотип"
      autoplay
      camera-orbit="90deg 90deg 1m"
      style={{ width: "50vw", height: "calc(9 * 40vw / 16)" }}
      className={css.logo}
    ></model-viewer>
  );
}
