describe("My first test", function(){
  it("expects true to be true", function(){
    expect(true).toBe(true);
  });
});

describe('toEqual', function() {
    it('passes if arrays are equal', function() {
        var arr = [1, 2, 3];
        expect(arr).toEqual([1, 2, 3]);
    });
});

describe("State abbreviations", function() {
  it("passes if getName('AR')'s return is equal to Arkansas", function() {
    var state = getName("AR");
    expect( getName("AR") ).toEqual("Arkansas");
  });
});
