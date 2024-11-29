// boolean isLeaf(BTNode node, int data) {
//     if (node == null) {
//      return false;
//     }
//  System.out.println("Node traversed :"+ node.data);
//  if (node.left == null && node.right == null && node.data == data) {
//      System.out.println("Node : " + node.data + " is leaf node");
//      return true;
//  }
//  return (isLeaf(node.left, data) || isLeaf(node.right, data));
//  }


boolean isLeaf(BTNode node, int data) {
    if (node == null)
        return false;    
    if (node.right == null && node.left == null)
        return true;
    return false; 
}
}