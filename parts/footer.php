<footer class="bg-secondary bg-gradient">
    <nav>
        <a href="./index.php">Home <span>(only this works at the moment)</span></a>
        <a href="">About</a>
        <a href="">Contacts</a>
    </nav>
</footer>

<style>
    footer {
        position: fixed;
        z-index: 1;
        bottom: 0;
        left: 0;
        width: 100%;
        min-height: 50px;
        display: flex;
        justify-content: center;

        >nav {
            width: 80%;
            display: flex;
            justify-content: space-between;
            align-items: center;

            & a {
                text-decoration: none;
                color: white;
                text-shadow: -1px 0 0 grey;

                >span {
                    font-size: xx-small;
                    color: white;
                }
            }
        }
    }
</style>