# Algorithms-PHP
This repo contains implementations of Algorithms from Robert Sedgewicks course:Algorithm 1 on coursera using PHP.

## Algorithms

### Union Find
There 4 implementations of this algorithm here. 2 have been implemented so far:
  - Quick Find
  - Quick Union
 To run the implementations against the sample inputs provided. Run a command like this:
```shell
php -f unionfind.php QuickUnion < data/uf/tinyUF.txt
```
`QuickUnion` is the name of the algorithm. Another option is `UnionFind` .
There are 3 input files: `tinyUF.txt`, `mediumUF.txt` and `largeUF.txt` all located in `data/uf/` folder