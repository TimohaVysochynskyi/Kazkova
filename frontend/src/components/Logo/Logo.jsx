export default function Logo() {
  return (
    <model-viewer
      src="/logo.glb"
      alt="A 3D model of an object"
      autoplay
      camera-orbit="90deg 90deg 1m"
      style={{ width: "50vw", height: "calc(9 * 40vw / 16)" }}
    ></model-viewer>
  );
}
