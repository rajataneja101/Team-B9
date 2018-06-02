package com.teamb9.exception;

@SuppressWarnings("serial")
public class CustomException extends SentienceImsException {

	private String code;

	public CustomException() {
		super();
	}

	public CustomException(String code) {
		super(code);
	}

	/**
	 * 
	 * @param msg
	 */
	public CustomException(String code, String msg) {

		super(msg);
		this.code = code;
	}

	public String getCode() {
		return code;
	}

}
