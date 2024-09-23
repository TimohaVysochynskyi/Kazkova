import { useRef, useState } from "react";

import css from "./AudioPlayer.module.css";

export default function AudioPlayer({ audio }) {
  const audioRef = useRef(null);
  const [isPlaying, setIsPlaying] = useState(false);
  const [currentTime, setCurrentTime] = useState(0);
  const [duration, setDuration] = useState(0);

  const handlePlayPause = () => {
    if (isPlaying) {
      audioRef.current.pause();
    } else {
      audioRef.current.play();
    }
    setIsPlaying(!isPlaying);
  };

  const handleTimeUpdate = () => {
    setCurrentTime(audioRef.current.currentTime);
  };

  const handleLoadedMetadata = () => {
    setDuration(audioRef.current.duration);
  };

  const handleProgressChange = (e) => {
    const newTime = (e.target.value / 100) * duration;
    audioRef.current.currentTime = newTime;
    setCurrentTime(newTime);
  };

  const formatTime = (time) => {
    const minutes = Math.floor(time / 60);
    const seconds = Math.floor(time % 60);
    return `${minutes}:${seconds < 10 ? `0${seconds}` : seconds}`;
  };

  return (
    <>
      <div className={css.container}>
        <button type="button" className={css.btn} onClick={handlePlayPause}>
          {isPlaying ? <img src="/pause.png" /> : <img src="/play.png" />}
        </button>

        <div className={css.progressWrapper}>
          <p className={css.progressTime}>
            {formatTime(currentTime)} / {formatTime(duration)}
          </p>

          <div className={css.progressBar}>
            <div
              className={css.progress}
              style={{ width: (currentTime / duration) * 100 || 0 }}
              onChange={handleProgressChange}
            ></div>
          </div>
        </div>

        <audio
          ref={audioRef}
          onTimeUpdate={handleTimeUpdate}
          onLoadedMetadata={handleLoadedMetadata}
          src={`/audio/${audio}.mp3`}
        ></audio>
      </div>
    </>
  );
}
