<link rel="stylesheet" href="css/filter.css">

<aside class="filter">
    <div class="filter-categories">
        <h4>Category</h4>
        <div class="inline-categ">
            <input type="checkbox" id="categ1" name="category">
            <label for="categ1">Plants</label>
        </div>
        <div class="inline-categ">
            <input type="checkbox" id="categ1" name="category">
            <label for="categ1">Seeds</label>
        </div>
        <div class="inline-categ">
            <input type="checkbox" id="categ1" name="category">
            <label for="categ1">Bulbs</label>
        </div>
        <div class="inline-categ">
            <input type="checkbox" id="categ1" name="category">
            <label for="categ1">Succulents</label>
        </div>
        <div class="inline-categ">
            <input type="checkbox" id="categ1" name="category">
            <label for="categ1">Flowers</label>
        </div>
        <div class="inline-categ">
            <input type="checkbox" id="categ1" name="category">
            <label for="categ1">Coffee</label>
        </div>
        <a href="" class="grey-text">More <img src="image/Icon- Arrow-down.png" style="display:inline;"></a>
    </div>
    <div class="filter-price">
        <h4>Minimum Price</h4>
        <div class="slidecontainer">
            <input type="range" min="0" max="10000" value="50" class="slider" id="myRange">
            <p>Value: <span id="demo"></span></p>
        </div>
    </div>
    <div class="filter-rating">
        <h4>Rating</h4>
        <div class="rating inline">
            <img src="image/Icon- Star shaded.png">
            <img src="image/Icon- Star shaded.png">
            <img src="image/Icon- Star shaded.png">
            <img src="image/Icon- Star shaded.png">
            <img src="image/Icon- Star unshaded.png">
        </div>
    </div>
</aside>
<script src="js/filter.js"></script>