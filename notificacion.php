<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo_ventana.png" >
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body>

<center>
    <h2 style="color: azure;">Estamos procesando su matricula por favor se paciente</h2>
    <div class="loader">
        
        <div class="cell d-0"></div>
        <div class="cell d-1"></div>
        <div class="cell d-2"></div>
      
        <div class="cell d-1"></div>
        <div class="cell d-2"></div>
        
        
        <div class="cell d-2"></div>
        <div class="cell d-3"></div>
        
        
        <div class="cell d-3"></div>
        <div class="cell d-4"></div>
        
        
      </div>
    <br>
    <br>
   
      <a href="matricula_grupal.php"><button class="btn-96"><span>Volver a Matriculas</span></button></a>
    </center>

      <style>

.btn-96,
.btn-96 *,
.btn-96 :after,
.btn-96 :before,
.btn-96:after,
.btn-96:before {
  border: 0 solid;
  box-sizing: border-box;
}

.btn-96 {
  -webkit-tap-highlight-color: transparent;
  -webkit-appearance: button;
  background-color: #000;
  background-image: none;
  color: #fff;
  cursor: pointer;
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
    Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
    Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
  font-size: 100%;
  line-height: 1.5;
  margin: 0;
  -webkit-mask-image: -webkit-radial-gradient(#000, #fff);
  padding: 0;
}

.btn-96:disabled {
  cursor: default;
}

.btn-96:-moz-focusring {
  outline: auto;
}

.btn-96 svg {
  display: block;
  vertical-align: middle;
}

.btn-96 [hidden] {
  display: none;
}

.btn-96 {
  box-sizing: border-box;
  display: block;
  font-weight: 900;
  -webkit-mask-image: none;
  padding: 2rem 5rem;
  perspective: 800px;
  position: relative;
  text-transform: uppercase;
  transform-style: preserve-3d;
}

.btn-96 span {
  background: #fff;
  color: #000;
  display: grid;
  inset: 0;
  place-items: center;
  position: absolute;
  transform: rotateX(0deg);
  transform-origin: top center;
  transition: 0.2s;
}

.btn-96:hover span {
  transform: rotateX(35deg);
}

.btn-96:after,
.btn-96:before {
  background: #ddd;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  transform: rotateX(0deg);
  width: 100%;
  z-index: -1;
}

.btn-96:after {
  background: #ccc;
  width: 0;
}

.btn-96:hover:after {
  -webkit-animation: progress-bar 1.2s;
  animation: progress-bar 1.2s;
}

@-webkit-keyframes progress-bar {
  0% {
    opacity: 1;
    width: 0;
  }

  10% {
    opacity: 1;
    width: 15%;
  }

  25% {
    opacity: 1;
    width: 25%;
  }

  40% {
    opacity: 1;
    width: 35%;
  }

  55% {
    opacity: 1;
    width: 75%;
  }

  60% {
    opacity: 1;
    width: 100%;
  }

  to {
    opacity: 0;
    width: 100%;
  }
}

@keyframes progress-bar {
  0% {
    opacity: 1;
    width: 0;
  }

  10% {
    opacity: 1;
    width: 15%;
  }

  25% {
    opacity: 1;
    width: 25%;
  }

  40% {
    opacity: 1;
    width: 35%;
  }

  55% {
    opacity: 1;
    width: 75%;
  }

  60% {
    opacity: 1;
    width: 100%;
  }

  to {
    opacity: 0;
    width: 100%;
  }
}

        body{

            background-color: black;
        }
        .loader {
  --cell-size: 52px;
  --cell-spacing: 1px;
  --cells: 3;
  --total-size: calc(var(--cells) * (var(--cell-size) + 2 * var(--cell-spacing)));
  display: flex;
  flex-wrap: wrap;
  width: var(--total-size);
  height: var(--total-size);
  margin-top: 19rem ;
}


.cell {
  flex: 0 0 var(--cell-size);
  margin: var(--cell-spacing);
  background-color: transparent;
  box-sizing: border-box;
  border-radius: 4px;
  animation: 1.5s ripple ease infinite;
}

.cell.d-1 {
  animation-delay: 100ms;
}

.cell.d-2 {
  animation-delay: 200ms;
}

.cell.d-3 {
  animation-delay: 300ms;
}

.cell.d-4 {
  animation-delay: 400ms;
}

.cell:nth-child(1) {
  --cell-color: #00FF87;
}

.cell:nth-child(2) {
  --cell-color: #0CFD95;
}

.cell:nth-child(3) {
  --cell-color: #17FBA2;
}

.cell:nth-child(4) {
  --cell-color: #23F9B2;
}

.cell:nth-child(5) {
  --cell-color: #30F7C3;
}

.cell:nth-child(6) {
  --cell-color: #3DF5D4;
}

.cell:nth-child(7) {
  --cell-color: #45F4DE;
}

.cell:nth-child(8) {
  --cell-color: #53F1F0;
}

.cell:nth-child(9) {
  --cell-color: #60EFFF;
}

/*Animation*/
@keyframes ripple {
  0% {
    background-color: transparent;
  }

  30% {
    background-color: var(--cell-color);
  }

  60% {
    background-color: transparent;
  }

  100% {
    background-color: transparent;
  }
}
      </style>
<script src="bv.js"></script>

   
</body>
</html>