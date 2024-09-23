import Modal from "react-modal";

import KazkaStars from "../KazkaStars/KazkaStars";
import AudioPlayer from "../AudioPlayer/AudioPlayer";

import css from "./KazkaModal.module.css";

Modal.setAppElement("#root");

export default function KazkaModal({
  data: { name, author, media, stars },
  isOpen,
  onClose,
}) {
  return (
    <>
      <Modal
        className={css.modal}
        overlayClassName={css.overlay}
        isOpen={isOpen}
        onRequestClose={onClose}
      >
        <div className={css.col}>
          <h2 className={css.name}>{name}</h2>
          <KazkaStars stars={stars} />
          <AudioPlayer audio={media} />
          <p className={css.author}>{author}</p>
        </div>

        <div className={css.col}>
          <model-viewer
            src={`/models/${media}.glb`}
            alt="Анімований логотип"
            autoplay
            camera-controls
            auto-rotate
            camera-orbit="90deg 90deg 16m"
            style={{ width: "100%", height: "100%" }}
          ></model-viewer>
        </div>
      </Modal>
    </>
  );
}
