<div class="item-container">
  <div class="item-box">
    <img src="path/to/image1.jpg" alt="Item Image 1">
  </div>
  <div class="item-box">
    <img src="path/to/image2.jpg" alt="Item Image 2">
  </div>
  <div class="item-box">
    <img src="path/to/image3.jpg" alt="Item Image 3">
  </div>
</div>


<style>
.item-container {
  display: flex;
  justify-content: space-around;
}
.item-box {
  border: 1px solid #ddd;
  padding: 10px;
  margin: 10px;
  width: 200px;
  text-align: center;
}
.item-box img {
  max-width: 100%;
  height: auto;
}
</style>
