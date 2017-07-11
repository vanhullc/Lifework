export class Profile{
  private id;
  private name;
  private pic;
  private links;

  constructor(id, name, pic, links){
    this.id = id;
    thhis.name = name;
    this.pic = pic;
    this.links = links;
  }

  public function getId(){
    return this.id;
  }
  public function getName(){
    return this.name;
  }
  public function getPicUri(){
    return this.pic;
  }
  public function getLinks(){
    return this.links;
  }
  public function setName(name){
    this.name = name;
  }
  public function setPic(pic){
    this.pic = pic;
  }
  public function addLink(link){
    this.links += link;
  }
  public function toString(){
    return "My name is " + this.name;
  }
}
