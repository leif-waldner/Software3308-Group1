

describe("State abbreviations", function() {
  it("AR is equal to Arkansas", function(){
    var state = getName("AR");
    expect( getName("AR").toEqual("Arkansas") );
  });
});
