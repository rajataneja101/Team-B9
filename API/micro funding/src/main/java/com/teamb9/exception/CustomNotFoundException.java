package com.teamb9.exception;

@SuppressWarnings("serial")
public class CustomNotFoundException extends SentienceImsException {

	private String code;

	public CustomNotFoundException() {
		super();
	}

	public CustomNotFoundException(String code) {
		super(code);
	}

	/**
	 * 
	 * @param msg
	 */
	public CustomNotFoundException(String code, String msg) {

		super(msg);
		this.code = code;
	}

	public String getCode() {
		return code;
	}

}
