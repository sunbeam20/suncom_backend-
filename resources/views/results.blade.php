@include('components.header')
<div class="results">
    <div class="filters">
        <h3>Filters</h3>
        <div class="filter-option">
            <label>Category</label>
            <div>
                <label>
                    <input type="checkbox" />
                    category . name
                </label>
            </div>
        </div>
        <div class="filter-option">
            <label class="label"> filterLabel </label>
            <div>
                <label>
                    <input type="checkbox" />Options
                </label>
            </div>
        </div>
    </div>
    <div class="main-content">
        <h2>Products</h2>
        <div class="sortbar">
            <label for="">Sort By</label>
            <button>Latest</button>
            <button>Top Sales</button>
        </div>
        <div class="product-container">
            @include('components.productCard')
        </div>
    </div>
</div>
@include('components.footer')

<style>
    body {
        margin: 0px;
    }

    .results {
        display: flex;
        padding-right: 1em;
        margin: 1.25em 0.25em 1.25em 0.25em;
        background-color: rgb(235, 235, 235);
    }

    .filters {
        flex: 0 0 12.5em;
        padding-left: 2%;
        border-radius: 5px;
        border-right: 1px solid rgba(122, 122, 122, 0.685);
    }

    .filter-option {
        margin-bottom: 0.625em;
        width: 15vw;
    }

    .filter-option div {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .filter-option label {
        display: flex;
        margin: 0.5em;
        padding: 0.1em;
        align-items: center;
        width: 35%;
    }

    .filter-option .label {
        width: 50%;
    }

    .filter-option input[type="checkbox"] {
        margin-right: 0.3125em;
        margin: 0.5em;
        display: flex;
    }

    .main-content {
        flex: 1;
        margin: 0em 0em 0em 1.25em;
    }

    .sortbar {
        display: block;
        background-color: aliceblue;
        margin-bottom: 0.3125em;
        border: 1px solid rgb(212, 212, 212);
        padding-left: 1em;
    }

    .sortbar button {
        padding: 1.5em;
        border-radius: 0.5em;
        border: none;
        color: #000;
        background-color: aliceblue;
        justify-content: space-between;
        margin-left: 1em;
    }

    .sortbar button:hover {
        cursor: pointer;
    }

    .product-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        gap: 1em;
        margin-left: 1.5em;
        padding: 2em 0em 2em 0em;
        justify-content: flex-start;
    }
</style>
