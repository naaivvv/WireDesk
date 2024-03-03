<script lang="ts" setup></script>

<template>
  <footer class="p-3">
    <div class="text-center">
      <a
        v-tooltip.bottom="'Author [Github Profile]'"
        href="https://github.com/naaivvv"
        target="_blank"
        class="inline-block rounded-full bg-[#D4F4F1] p-2 mr-2 text-center text-white"
      >
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAACNklEQVR4nLWUz2sTQRTH1x9E8aDQnf5AiiIoVZFKTVA8KdrdjaDH/AsevXr0YqWSLeLRXbCHMkvdWttTdhNS4i+w2CpJNbA7tKC0a607iVIPNadXZjcppLGNu4kPvjBvdvh+3jz2DcdtD12PIBM/5E3tGzI1qJOBHWRow+wMFzaYQYOxuR2kDYcG/LVys168iVfD36BZ9aavlgAxp7CrUFgAUuQHSB1pDlBHgFeTQ4EBvJr8jVT5HwAyIEVeDwMYQopcaQpQ5AqvJO9zYSO6kl/fBfCLazViK/mpnQBRp/CsDYBCX8zJlxvN8/TicqG3NXddj3QaONE983zu7IcMXPj60dOZ+Qz0zEwsoDS+fTw3ejCwb1dW6+ZNfBeZ2vLWQD195P8xTGxdm2QDf2fPRUdqrPltUBpHkaE94Q1to2Fip0d9Yya2bphoXOFNTe8w8GDLTwMK+3S0w/zY62mIu9b1m45z6L8AYvY7kCgBidp32gIYKL6BU++Nrfyq88kDxMtWv0DtS5JLxuOEHAgFGCi+9cyEHxb0ZCfgaG7Sr94lpQR8jkjUJtU85UGCmPcvvKq2gsDJ2ZS31zef8XLRJZOsYKG0eE6i9kb13FQgQO/LF3BttegZXl6ag870eH3/AfaILnlcBVYEl9zigobgV7gmuWQ2Tslh0bW/1PqfANjH+i9S+49Qsm4ENq+F6FqnB8tLR4Sf1ola/+8B7GXfrkBuv+guRkOb14HW7PMiJVmR2mM7HdoEjD8wcPqpXaYAAAAASUVORK5CYII=">
      </a>
      <a
        v-tooltip.bottom="'Github Repository [Source]'"
        href="https://github.com/naaivvv/WireDesk"
        target="_blank"
        class="inline-block rounded-full bg-[#333] p-2 text-center text-white"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          stroke-width="1"
          stroke="currentColor"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path
            d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"
          ></path>
        </svg>
      </a>
    </div>

    <p class="text-center text-sm text-gray-500">
      All rights reserved &copy; {{ new Date().getFullYear() }}
    </p>
  </footer>
</template>
